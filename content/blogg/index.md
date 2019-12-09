---
views:
    main:
        template: anax/v2/article/default
        data:
            class: blog

    byline: false
    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: anax/v2/blog-list/default
        sort: 2
        data:
            dateFormat: j F Y
            meta: 
                type: toc
                orderby: publishTime
                orderorder: desc

    blog-toc:
        region: sidebar-right
        template: anax/v2/blog-toc/default
        sort: 2
        data:
            meta: 
                type: copy
                view: blog-list

---
KMOM05 Bild
===========================

Kmom05 handlar om bildverktyg och bildformat samt hur vi publicerar bilderna på en webbplats, inklusive responsivitet.
