// LyraGhost V2
// 2016 - 2017

// Sidebar menu //
$("body").on("click", ".menu-btn", function(){
    if($('body').hasClass('menu-open')){
        $('body').removeClass('menu-open');
        $(".menu-btn, .mobile-menu").removeClass('open');
    } else {
        $('body').addClass('menu-open');
        $(".menu-btn, .mobile-menu").addClass('open');
    }
});
$("body").on("click", ".mobile-menu a, .top-menu h1", function(){
    if($('body').hasClass('menu-open')){
        $('body').removeClass('menu-open');
        $(".menu-btn, .mobile-menu").removeClass('open');
    }
});

// Link scrolling
// Ignores external links
$("body").on("click", "a", function(e){
    if($(this).data("ext")){
    } else if ($(this).data("project")){
    } else {
        e.preventDefault;
        var target = $(this).attr('href');
        smoothScroll(target);
    }
});

function smoothScroll(target, callback){
    if (typeof(callback)==='undefined') callback = function(){};
    $("html, body").stop().animate({
        scrollTop: (target == "#top" ? 0 : $(target).offset().top)
    }, 700,'easeInOutExpo', callback);
}

// Load projects //
var $view = $("#project-view");

var project = {
    links: [],
    link: "",
    id: 0,
    isOpen: false,
    nav: {
        show: function(){
            $(".project-nav").addClass("open");
        },
        hide: function(){
            $(".project-nav").removeClass("open");
        }
    },
    open: function(data){
        this.isOpen = true;
        $view.html(data).imagesLoaded({ background: '.hero' }).always(function(){
            $view.addClass("open");
            smoothScroll("#project-view");
            project.nav.show();
            $("#loader").removeClass("loading");
            setTimeout(function () {
                $("#loader").css('display', 'none');
            }, 300);
        });
    },
    close: function(){
        smoothScroll("#projects",function(){
            $view.html("");
            $view.removeClass("open");
            project.isOpen = false;
        });
        project.nav.hide();
    },
    loadNext: function(){
        if (this.id >= this.links.length -1) {
            this.id=0;
        } else {
            this.id++;
        }
        this.link = this.links[this.id];
        this.load();
    },
    loadPrev: function(){
        if (this.id <= 0) {
            this.id=this.links.length -1;
        } else {
            this.id--;
        }
        this.link = this.links[this.id];
        this.load();
    },
    load: function(){
        //load project
        $.ajax({
            method: 'GET',
            url: 'project/' + this.link + '.html',
            dataType: 'html',
            beforeSend: function(){
                $("#loader").css("display", "flex");
                setTimeout(function () {
                    $("#loader").addClass("loading");
                }, 20);
            }
        })
        .done(function(data) {
            project.open(data);
        })
        .fail(function() {
            var failed = "<div class='container error'><p>I'm sorry, I really tried loading that for you :&#40;</p>"+
                        "<p>You could try loading that again or try another if you'd like</p>"+
                        "<p><a class='close-view' href='#projects'>Back to Projects</a></p></div>";
            project.open(failed);
        });
    }
}

//add links to array from page
$(".project-list .project a[data-project]").each(function(){
    project.links.push($(this).data("project"));
});


//load project that was clicked on
$(".project-list").on("click", ".project a[data-project]", function(){
    $view.html("");
    $view.removeClass("open");
    project.isOpen = false;
    project.link = $(this).data("project");
    project.id = $.inArray(project.link, project.links);
    project.load();
});

//project nav events
//next/prev/close
$(".top-menu").on("click", ".project-nav .next",function(){
    project.loadNext();
});
$(".top-menu").on("click", ".project-nav .prev",function(){
    project.loadPrev();
});
$(".top-menu").on("click", ".project-nav .close",function(){
    project.close();
});

$("body").on("click", "#project-view .close-view", function(){
    project.close();
});
