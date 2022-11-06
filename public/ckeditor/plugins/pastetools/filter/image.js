﻿/*
 Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
(function () {
    function f(b) {
        var c = [],
            a =
                /(\{\\pict[^{}]+?|\{\\\*\\shppict\{\\pict\{\\\*[^*]+?)\\(?:jpeg|png)blip/,
            d;
        b = b.match(
            new RegExp("(?:(" + a.source + "))([\\da-fA-F\\s]+)\\}", "g")
        );
        if (!b) return c;
        for (var e = 0; e < b.length; e++)
            if (a.test(b[e])) {
                if (-1 !== b[e].indexOf("\\pngblip")) d = "image/png";
                else if (-1 !== b[e].indexOf("\\jpegblip")) d = "image/jpeg";
                else continue;
                c.push({
                    hex: d
                        ? b[e].replace(a, "").replace(/[^\da-fA-F]/g, "")
                        : null,
                    type: d,
                });
            }
        return c;
    }
    function g(b) {
        for (
            var c = /<img[^>]+src="([^"]+)[^>]+/g, a = [], d;
            (d = c.exec(b));

        )
            a.push(d[1]);
        return a;
    }
    CKEDITOR.pasteFilters.image = function (b, c, a) {
        var d = [];
        if (!a) return b;
        c = g(b);
        if (0 === c.length) return b;
        a = f(a);
        if (0 === a.length) return b;
        CKEDITOR.tools.array.forEach(
            a,
            function (a) {
                d.push(
                    a.type
                        ? "data:" +
                              a.type +
                              ";base64," +
                              CKEDITOR.tools.convertBytesToBase64(
                                  CKEDITOR.tools.convertHexStringToBytes(a.hex)
                              )
                        : null
                );
            },
            this
        );
        if (c.length === d.length)
            for (a = 0; a < c.length; a++)
                0 === c[a].indexOf("file://") &&
                    d[a] &&
                    (b = b.replace(c[a], d[a]));
        return b;
    };
})();
