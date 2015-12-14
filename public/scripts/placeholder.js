$('document').ready(function() {
    "use strict";

    var Site = function() {
        this.currentPage = document.URL.substr(document.URL.lastIndexOf('/') + 1);

        this.page = function (page, callback) {
            if (page === null) {
                return this.currentPage;
            } else {
                callback();
            }
        };

        return this;
    };

    var site = new Site();

    site.page('', function () {

        var Link = Backbone.Model.extend({
            initialize: function (id) {
                var element = document.getElementById(id);

                this.set({
                    link: element,
                    innerHTML: element.innerHTML,
                    title: element.title.charAt(0).toUpperCase() + element.title.slice(1)
                });

            },
            defaults: {
                link: null,
                innerHTML: null
            }
        });

        var Links = Backbone.Collection.extend({
            model: Link
        });

        var contact = new Link('contact'),
            github = new Link('github'),
            resume = new Link('resume');

        var links = new Links([contact, github, resume]);
        
        $('a').on({
            mouseenter: function () {
                var id = this.id,
                    model = links.find(function (model) {
                        return model.get("link").id == id;
                });

                $(this).html(model.get("title")).addClass('hidden');
            },
            mouseleave: function () {
                var id = this.id,
                    model = links.find(function (model) {
                        return model.get("link").id == id;
                    });

                $(this).html(model.get("innerHTML"));
            }
        });

    });

    site.page('contact', function() {
        // Automatically resizes the Body Field
        if (typeof(autosize) === typeof(Function)) {
            autosize(document.querySelector('#mail_form textarea'));
        }
    });
});