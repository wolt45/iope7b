
window.MainNavView = Backbone.View.extend({

    initialize:function () {
        this.template = _.template(tpl.get('main.nav.html'));
    },

    render:function (eventName) {
        $(this.el).html(this.template());
        return this;
    },
});

window.MainContentView = Backbone.View.extend({

    initialize:function () {
        this.template = _.template(tpl.get('main.content.html'));
    },

    render:function (eventName) {
        $(this.el).html(this.template());
        return this;
    },
});

var AppRouter = Backbone.Router.extend({

    initialize:function () {
        $('#topLeft').html(new MainNavView().render().el);
        $('#RBG_Content').html(new MainContentView().render().el);
		
        $('#topLeft').on('click', '.refresh_key', function(event) {
            window.history.back();
            return false;
        });
		
		//$('#search-bar').on('keyup', '.search-key', function(event) {
        //    //var search = this.search();
			
		//	alert ("SEARCH HELP!!!");
			
        //    return false;
        //});
    },

    routes:{
        "":"main_nav",
	},
	
});

$(document).on("ready", function () {
	tpl.loadTemplates(['main.nav.html', 'main.content.html'], function () {
		app = new AppRouter();	
		Backbone.history.start();
	});
});