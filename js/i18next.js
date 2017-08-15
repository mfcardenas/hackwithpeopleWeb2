// i18next, v1.7.7
// Copyright (c)2014 Jan Mühlemann (jamuhl).
// Distributed under MIT license
// http://i18next.com
!function () {
    function a(a, b) {
        if (!b || "function" == typeof b)return a;
        for (var c in b)a[c] = b[c];
        return a
    }

    function b(a, c) {
        for (var d in c)d in a ? b(a[d], c[d]) : a[d] = c[d];
        return a
    }

    function c(a, b, c) {
        var d, e = 0, f = a.length, g = void 0 === f || "[object Array]" !== Object.prototype.toString.apply(a) || "function" == typeof a;
        if (c)if (g) {
            for (d in a)if (b.apply(a[d], c) === !1)break
        } else for (; f > e && b.apply(a[e++], c) !== !1;); else if (g) {
            for (d in a)if (b.call(a[d], d, a[d]) === !1)break
        } else for (; f > e && b.call(a[e], e, a[e++]) !== !1;);
        return a
    }

    function d(a) {
        return "string" == typeof a ? a.replace(/[&<>"'\/]/g, function (a) {
            return Q[a]
        }) : a
    }

    function e(a) {
        var b = function (a) {
            if (window.XMLHttpRequest)return a(null, new XMLHttpRequest);
            if (window.ActiveXObject)try {
                return a(null, new ActiveXObject("Msxml2.XMLHTTP"))
            } catch (b) {
                return a(null, new ActiveXObject("Microsoft.XMLHTTP"))
            }
            return a(new Error)
        }, c = function (a) {
            if ("string" == typeof a)return a;
            var b = [];
            for (var c in a)a.hasOwnProperty(c) && b.push(encodeURIComponent(c) + "=" + encodeURIComponent(a[c]));
            return b.join("&")
        }, d = function (a) {
            a = a.replace(/\r\n/g, "\n");
            for (var b = "", c = 0; c < a.length; c++) {
                var d = a.charCodeAt(c);
                128 > d ? b += String.fromCharCode(d) : d > 127 && 2048 > d ? (b += String.fromCharCode(192 | d >> 6), b += String.fromCharCode(128 | 63 & d)) : (b += String.fromCharCode(224 | d >> 12), b += String.fromCharCode(128 | 63 & d >> 6), b += String.fromCharCode(128 | 63 & d))
            }
            return b
        }, e = function (a) {
            var b = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
            a = d(a);
            var c, e, f, g, h, i, j, k = "", l = 0;
            do c = a.charCodeAt(l++), e = a.charCodeAt(l++), f = a.charCodeAt(l++), g = c >> 2, h = (3 & c) << 4 | e >> 4, i = (15 & e) << 2 | f >> 6, j = 63 & f, isNaN(e) ? i = j = 64 : isNaN(f) && (j = 64), k += b.charAt(g) + b.charAt(h) + b.charAt(i) + b.charAt(j), c = e = f = "", g = h = i = j = ""; while (l < a.length);
            return k
        }, f = function () {
            for (var a = arguments[0], b = 1; b < arguments.length; b++) {
                var c = arguments[b];
                for (var d in c)c.hasOwnProperty(d) && (a[d] = c[d])
            }
            return a
        }, g = function (a, d, e, h) {
            "function" == typeof e && (h = e, e = {}), e.cache = e.cache || !1, e.data = e.data || {}, e.headers = e.headers || {}, e.jsonp = e.jsonp || !1, e.async = void 0 === e.async ? !0 : e.async;
            var i, j = f({
                accept: "*/*",
                "content-type": "application/x-www-form-urlencoded;charset=UTF-8"
            }, g.headers, e.headers);
            if (i = "application/json" === j["content-type"] ? JSON.stringify(e.data) : c(e.data), "GET" === a) {
                var k = [];
                if (i && (k.push(i), i = null), e.cache || k.push("_=" + (new Date).getTime()), e.jsonp && (k.push("callback=" + e.jsonp), k.push("jsonp=" + e.jsonp)), k = k.join("&"), k.length > 1 && (d += d.indexOf("?") > -1 ? "&" + k : "?" + k), e.jsonp) {
                    var l = document.getElementsByTagName("head")[0], m = document.createElement("script");
                    return m.type = "text/javascript", m.src = d, l.appendChild(m), void 0
                }
            }
            b(function (b, c) {
                if (b)return h(b);
                c.open(a, d, e.async);
                for (var f in j)j.hasOwnProperty(f) && c.setRequestHeader(f, j[f]);
                c.onreadystatechange = function () {
                    if (4 === c.readyState) {
                        var a = c.responseText || "";
                        if (!h)return;
                        h(c.status, {
                            text: function () {
                                return a
                            }, json: function () {
                                try {
                                    return JSON.parse(a)
                                } catch (b) {
                                    return T.error("Can not parse JSON. URL: " + d), {}
                                }
                            }
                        })
                    }
                }, c.send(i)
            })
        }, h = {
            authBasic: function (a, b) {
                g.headers.Authorization = "Basic " + e(a + ":" + b)
            }, connect: function (a, b, c) {
                return g("CONNECT", a, b, c)
            }, del: function (a, b, c) {
                return g("DELETE", a, b, c)
            }, get: function (a, b, c) {
                return g("GET", a, b, c)
            }, head: function (a, b, c) {
                return g("HEAD", a, b, c)
            }, headers: function (a) {
                g.headers = a || {}
            }, isAllowed: function (a, b, c) {
                this.options(a, function (a, d) {
                    c(-1 !== d.text().indexOf(b))
                })
            }, options: function (a, b, c) {
                return g("OPTIONS", a, b, c)
            }, patch: function (a, b, c) {
                return g("PATCH", a, b, c)
            }, post: function (a, b, c) {
                return g("POST", a, b, c)
            }, put: function (a, b, c) {
                return g("PUT", a, b, c)
            }, trace: function (a, b, c) {
                return g("TRACE", a, b, c)
            }
        }, i = a.type ? a.type.toLowerCase() : "get";
        h[i](a.url, a, function (b, c) {
            200 === b || 0 === b && c.text() ? a.success(c.json(), b, null) : a.error(c.text(), b, null)
        })
    }

    function f(a, b) {
        "function" == typeof a && (b = a, a = {}), a = a || {}, T.extend(P, a), delete P.fixLng, P.functions && (delete P.functions, T.extend(T, a.functions)), "string" == typeof P.ns && (P.ns = {
            namespaces: [P.ns],
            defaultNs: P.ns
        }), "string" == typeof P.fallbackNS && (P.fallbackNS = [P.fallbackNS]), ("string" == typeof P.fallbackLng || "boolean" == typeof P.fallbackLng) && (P.fallbackLng = [P.fallbackLng]), P.interpolationPrefixEscaped = T.regexEscape(P.interpolationPrefix), P.interpolationSuffixEscaped = T.regexEscape(P.interpolationSuffix), P.lng || (P.lng = T.detectLanguage()), L = T.toLanguages(P.lng), F = L[0], T.log("currentLng set to: " + F), P.useCookie && T.cookie.read(P.cookieName) !== F && T.cookie.create(P.cookieName, F, P.cookieExpirationTime, P.cookieDomain), P.detectLngFromLocalStorage && "undefined" != typeof document && window.localStorage && T.localStorage.setItem("i18next_lng", F);
        var c = z;
        a.fixLng && (c = function (a, b) {
            return b = b || {}, b.lng = b.lng || c.lng, z(a, b)
        }, c.lng = F), W.setCurrentLng(F), H && P.setJqueryExt && s();
        var d;
        if (H && H.Deferred && (d = H.Deferred()), !P.resStore) {
            var e = T.toLanguages(P.lng);
            "string" == typeof P.preload && (P.preload = [P.preload]);
            for (var f = 0, g = P.preload.length; g > f; f++)for (var h = T.toLanguages(P.preload[f]), i = 0, j = h.length; j > i; i++)e.indexOf(h[i]) < 0 && e.push(h[i]);
            return I.sync.load(e, P, function (a, e) {
                J = e, M = !0, b && b(c), d && d.resolve(c)
            }), d ? d.promise() : void 0
        }
        return J = P.resStore, M = !0, b && b(c), d && d.resolve(c), d ? d.promise() : void 0
    }

    function g(a, b) {
        "string" == typeof a && (a = [a]);
        for (var c = 0, d = a.length; d > c; c++)P.preload.indexOf(a[c]) < 0 && P.preload.push(a[c]);
        return f(b)
    }

    function h(a, b, c, d) {
        "string" != typeof b ? (c = b, b = P.ns.defaultNs) : P.ns.namespaces.indexOf(b) < 0 && P.ns.namespaces.push(b), J[a] = J[a] || {}, J[a][b] = J[a][b] || {}, d ? T.deepExtend(J[a][b], c) : T.extend(J[a][b], c)
    }

    function i(a, b) {
        "string" != typeof b && (b = P.ns.defaultNs), J[a] = J[a] || {};
        var c = J[a][b] || {}, d = !1;
        for (var e in c)c.hasOwnProperty(e) && (d = !0);
        return d
    }

    function j(a, b) {
        "string" != typeof b && (b = P.ns.defaultNs), J[a] = J[a] || {}, J[a][b] = {}
    }

    function k(a, b, c, d) {
        "string" != typeof b ? (resource = b, b = P.ns.defaultNs) : P.ns.namespaces.indexOf(b) < 0 && P.ns.namespaces.push(b), J[a] = J[a] || {}, J[a][b] = J[a][b] || {};
        for (var e = c.split(P.keyseparator), f = 0, g = J[a][b]; e[f];)f == e.length - 1 ? g[e[f]] = d : (null == g[e[f]] && (g[e[f]] = {}), g = g[e[f]]), f++
    }

    function l(a, b, c) {
        "string" != typeof b ? (resource = b, b = P.ns.defaultNs) : P.ns.namespaces.indexOf(b) < 0 && P.ns.namespaces.push(b);
        for (var d in c)"string" == typeof c[d] && k(a, b, d, c[d])
    }

    function m(a) {
        P.ns.defaultNs = a
    }

    function n(a, b) {
        o([a], b)
    }

    function o(a, b) {
        var c = {
            dynamicLoad: P.dynamicLoad,
            resGetPath: P.resGetPath,
            getAsync: P.getAsync,
            customLoad: P.customLoad,
            ns: {namespaces: a, defaultNs: ""}
        }, d = T.toLanguages(P.lng);
        "string" == typeof P.preload && (P.preload = [P.preload]);
        for (var e = 0, f = P.preload.length; f > e; e++)for (var g = T.toLanguages(P.preload[e]), h = 0, i = g.length; i > h; h++)d.indexOf(g[h]) < 0 && d.push(g[h]);
        for (var j = [], k = 0, l = d.length; l > k; k++) {
            var m = !1, n = J[d[k]];
            if (n)for (var o = 0, p = a.length; p > o; o++)n[a[o]] || (m = !0); else m = !0;
            m && j.push(d[k])
        }
        j.length ? I.sync._fetch(j, c, function (c, d) {
            var e = a.length * j.length;
            T.each(a, function (a, c) {
                P.ns.namespaces.indexOf(c) < 0 && P.ns.namespaces.push(c), T.each(j, function (a, f) {
                    J[f] = J[f] || {}, J[f][c] = d[f][c], e--, 0 === e && b && (P.useLocalStorage && I.sync._storeLocal(J), b())
                })
            })
        }) : b && b()
    }

    function p(a, b, c) {
        return "function" == typeof b ? (c = b, b = {}) : b || (b = {}), b.lng = a, f(b, c)
    }

    function q() {
        return F
    }

    function r(a) {
        J = {}, p(F, a)
    }

    function s() {
        function a(a, b, c) {
            if (0 !== b.length) {
                var d = "text";
                if (0 === b.indexOf("[")) {
                    var e = b.split("]");
                    b = e[1], d = e[0].substr(1, e[0].length - 1)
                }
                b.indexOf(";") === b.length - 1 && (b = b.substr(0, b.length - 2));
                var f;
                if ("html" === d)f = P.defaultValueFromContent ? H.extend({defaultValue: a.html()}, c) : c, a.html(H.t(b, f)); else if ("text" === d)f = P.defaultValueFromContent ? H.extend({defaultValue: a.text()}, c) : c, a.text(H.t(b, f)); else if ("prepend" === d)f = P.defaultValueFromContent ? H.extend({defaultValue: a.html()}, c) : c, a.prepend(H.t(b, f)); else if ("append" === d)f = P.defaultValueFromContent ? H.extend({defaultValue: a.html()}, c) : c, a.append(H.t(b, f)); else if (0 === d.indexOf("data-")) {
                    var g = d.substr("data-".length);
                    f = P.defaultValueFromContent ? H.extend({defaultValue: a.data(g)}, c) : c;
                    var h = H.t(b, f);
                    a.data(g, h), a.attr(d, h)
                } else f = P.defaultValueFromContent ? H.extend({defaultValue: a.attr(d)}, c) : c, a.attr(d, H.t(b, f))
            }
        }

        function b(b, c) {
            var d = b.attr(P.selectorAttr);
            if (d || "undefined" == typeof d || d === !1 || (d = b.text() || b.val()), d) {
                var e = b, f = b.data("i18n-target");
                if (f && (e = b.find(f) || b), c || P.useDataAttrOptions !== !0 || (c = b.data("i18n-options")), c = c || {}, d.indexOf(";") >= 0) {
                    var g = d.split(";");
                    H.each(g, function (b, d) {
                        "" !== d && a(e, d, c)
                    })
                } else a(e, d, c);
                P.useDataAttrOptions === !0 && b.data("i18n-options", c)
            }
        }

        H.t = H.t || z, H.fn.i18n = function (a) {
            return this.each(function () {
                b(H(this), a);
                var c = H(this).find("[" + P.selectorAttr + "]");
                c.each(function () {
                    b(H(this), a)
                })
            })
        }
    }

    function t(a, b, c, d) {
        if (!a)return a;
        if (d = d || b, a.indexOf(d.interpolationPrefix || P.interpolationPrefix) < 0)return a;
        var e = d.interpolationPrefix ? T.regexEscape(d.interpolationPrefix) : P.interpolationPrefixEscaped, f = d.interpolationSuffix ? T.regexEscape(d.interpolationSuffix) : P.interpolationSuffixEscaped, g = "HTML" + f, h = b.replace && "object" == typeof b.replace ? b.replace : b;
        return T.each(h, function (b, h) {
            var i = c ? c + P.keyseparator + b : b;
            "object" == typeof h && null !== h ? a = t(a, h, i, d) : d.escapeInterpolation || P.escapeInterpolation ? (a = a.replace(new RegExp([e, i, g].join(""), "g"), T.regexReplacementEscape(h)), a = a.replace(new RegExp([e, i, f].join(""), "g"), T.regexReplacementEscape(T.escape(h)))) : a = a.replace(new RegExp([e, i, f].join(""), "g"), T.regexReplacementEscape(h))
        }), a
    }

    function u(a, b) {
        var c = ",", d = "{", e = "}", f = T.extend({}, b);
        for (delete f.postProcess; -1 != a.indexOf(P.reusePrefix) && (K++, !(K > P.maxRecursion));) {
            var g = a.lastIndexOf(P.reusePrefix), h = a.indexOf(P.reuseSuffix, g) + P.reuseSuffix.length, i = a.substring(g, h), j = i.replace(P.reusePrefix, "").replace(P.reuseSuffix, "");
            if (g >= h)return T.error("there is an missing closing in following translation value", a), "";
            if (-1 != j.indexOf(c)) {
                var k = j.indexOf(c);
                if (-1 != j.indexOf(d, k) && -1 != j.indexOf(e, k)) {
                    var l = j.indexOf(d, k), m = j.indexOf(e, l) + e.length;
                    try {
                        f = T.extend(f, JSON.parse(j.substring(l, m))), j = j.substring(0, k)
                    } catch (n) {
                    }
                }
            }
            var o = C(j, f);
            a = a.replace(i, T.regexReplacementEscape(o))
        }
        return a
    }

    function v(a) {
        return a.context && ("string" == typeof a.context || "number" == typeof a.context)
    }

    function w(a) {
        return void 0 !== a.count && "string" != typeof a.count
    }

    function x(a) {
        return void 0 !== a.indefinite_article && "string" != typeof a.indefinite_article && a.indefinite_article
    }

    function y(a, b) {
        b = b || {};
        var c = A(a, b), d = D(a, b);
        return void 0 !== d || d === c
    }

    function z(a, b) {
        return b = b || {}, M ? (K = 0, C.apply(null, arguments)) : (T.log("i18next not finished initialization. you might have called t function before loading resources finished."), b.defaultValue || "")
    }

    function A(a, b) {
        return void 0 !== b.defaultValue ? b.defaultValue : a
    }

    function B() {
        for (var a = [], b = 1; b < arguments.length; b++)a.push(arguments[b]);
        return {postProcess: "sprintf", sprintf: a}
    }

    function C(a, b) {
        if (b && "object" != typeof b ? "sprintf" === P.shortcutFunction ? b = B.apply(null, arguments) : "defaultValue" === P.shortcutFunction && (b = {defaultValue: b}) : b = b || {}, "object" == typeof P.defaultVariables && (b = T.extend({}, P.defaultVariables, b)), void 0 === a || null === a || "" === a)return "";
        "string" == typeof a && (a = [a]);
        var c = a[0];
        if (a.length > 1)for (var d = 0; d < a.length && (c = a[d], !y(c, b)); d++);
        var e, f = A(c, b), g = D(c, b), h = b.lng ? T.toLanguages(b.lng, b.fallbackLng) : L, i = b.ns || P.ns.defaultNs;
        c.indexOf(P.nsseparator) > -1 && (e = c.split(P.nsseparator), i = e[0], c = e[1]), void 0 === g && P.sendMissing && "function" == typeof P.missingKeyHandler && (b.lng ? P.missingKeyHandler(h[0], i, c, f, h) : P.missingKeyHandler(P.lng, i, c, f, h));
        var j = b.postProcess || P.postProcess;
        void 0 !== g && j && X[j] && (g = X[j](g, c, b));
        var k = f;
        if (f.indexOf(P.nsseparator) > -1 && (e = f.split(P.nsseparator), k = e[1]), k === c && P.parseMissingKey && (f = P.parseMissingKey(f)), void 0 === g && (f = t(f, b), f = u(f, b), j && X[j])) {
            var l = A(c, b);
            g = X[j](l, c, b)
        }
        return void 0 !== g ? g : f
    }

    function D(a, b) {
        b = b || {};
        var c, d, e = A(a, b), f = L;
        if (!J)return e;
        if ("cimode" === f[0].toLowerCase())return e;
        if (b.lngs && (f = b.lngs), b.lng && (f = T.toLanguages(b.lng, b.fallbackLng), !J[f[0]])) {
            var g = P.getAsync;
            P.getAsync = !1, I.sync.load(f, P, function (a, b) {
                T.extend(J, b), P.getAsync = g
            })
        }
        var h = b.ns || P.ns.defaultNs;
        if (a.indexOf(P.nsseparator) > -1) {
            var i = a.split(P.nsseparator);
            h = i[0], a = i[1]
        }
        if (v(b)) {
            c = T.extend({}, b), delete c.context, c.defaultValue = P.contextNotFound;
            var j = h + P.nsseparator + a + "_" + b.context;
            if (d = z(j, c), d != P.contextNotFound)return t(d, {context: b.context})
        }
        if (w(b, f[0])) {
            c = T.extend({lngs: [f[0]]}, b), delete c.count, delete c.lng, c.defaultValue = P.pluralNotFound;
            var k;
            if (W.needsPlural(f[0], b.count)) {
                k = h + P.nsseparator + a + P.pluralSuffix;
                var l = W.get(f[0], b.count);
                l >= 0 ? k = k + "_" + l : 1 === l && (k = h + P.nsseparator + a)
            } else k = h + P.nsseparator + a;
            if (d = z(k, c), d != P.pluralNotFound)return t(d, {
                count: b.count,
                interpolationPrefix: b.interpolationPrefix,
                interpolationSuffix: b.interpolationSuffix
            });
            if (!(f.length > 1))return d;
            var m = f.slice();
            if (m.shift(), b = T.extend(b, {lngs: m}), delete b.lng, d = z(h + P.nsseparator + a, b), d != P.pluralNotFound)return d
        }
        if (x(b)) {
            var n = T.extend({}, b);
            delete n.indefinite_article, n.defaultValue = P.indefiniteNotFound;
            var o = h + P.nsseparator + a + (b.count && !w(b, f[0]) || !b.count ? P.indefiniteSuffix : "");
            if (d = z(o, n), d != P.indefiniteNotFound)return d
        }
        for (var p, q = a.split(P.keyseparator), r = 0, s = f.length; s > r && void 0 === p; r++) {
            for (var y = f[r], B = 0, E = J[y] && J[y][h]; q[B];)E = E && E[q[B]], B++;
            if (void 0 !== E) {
                var F = Object.prototype.toString.apply(E);
                if ("string" == typeof E)E = t(E, b), E = u(E, b); else if ("[object Array]" !== F || P.returnObjectTrees || b.returnObjectTrees) {
                    if (null === E && P.fallbackOnNull === !0)E = void 0; else if (null !== E)if (P.returnObjectTrees || b.returnObjectTrees) {
                        if ("[object Number]" !== F && "[object Function]" !== F && "[object RegExp]" !== F) {
                            var G = "[object Array]" === F ? [] : {};
                            T.each(E, function (c) {
                                G[c] = C(h + P.nsseparator + a + P.keyseparator + c, b)
                            }), E = G
                        }
                    } else P.objectTreeKeyHandler && "function" == typeof P.objectTreeKeyHandler ? E = P.objectTreeKeyHandler(a, E, y, h, b) : (E = "key '" + h + ":" + a + " (" + y + ")' " + "returned an object instead of string.", T.log(E))
                } else E = E.join("\n"), E = t(E, b), E = u(E, b);
                "string" == typeof E && "" === E.trim() && P.fallbackOnEmpty === !0 && (E = void 0), p = E
            }
        }
        if (void 0 === p && !b.isFallbackLookup && (P.fallbackToDefaultNS === !0 || P.fallbackNS && P.fallbackNS.length > 0)) {
            if (b.isFallbackLookup = !0, P.fallbackNS.length) {
                for (var H = 0, K = P.fallbackNS.length; K > H; H++)if (p = D(P.fallbackNS[H] + P.nsseparator + a, b), p || "" === p && P.fallbackOnEmpty === !1) {
                    var M = p.indexOf(P.nsseparator) > -1 ? p.split(P.nsseparator)[1] : p, N = e.indexOf(P.nsseparator) > -1 ? e.split(P.nsseparator)[1] : e;
                    if (M !== N)break
                }
            } else p = D(a, b);
            b.isFallbackLookup = !1
        }
        return p
    }

    function E() {
        var a, b = P.lngWhitelist || [], c = [];
        if ("undefined" != typeof window && !function () {
                for (var a = window.location.search.substring(1), b = a.split("&"), d = 0; d < b.length; d++) {
                    var e = b[d].indexOf("=");
                    if (e > 0) {
                        var f = b[d].substring(0, e);
                        f == P.detectLngQS && c.push(b[d].substring(e + 1))
                    }
                }
            }(), P.useCookie && "undefined" != typeof document) {
            var d = T.cookie.read(P.cookieName);
            d && c.push(d)
        }
        if (P.detectLngFromLocalStorage && "undefined" != typeof window && window.localStorage && c.push(window.localStorage.getItem("i18next_lng")), "undefined" != typeof navigator) {
            if (navigator.languages)for (var e = 0; e < navigator.languages.length; e++)c.push(navigator.languages[e]);
            navigator.userLanguage && c.push(navigator.userLanguage), navigator.language && c.push(navigator.language)
        }
        return function () {
            for (var d = 0; d < c.length; d++) {
                var e = c[d];
                if (e.indexOf("-") > -1) {
                    var f = e.split("-");
                    e = P.lowerCaseLng ? f[0].toLowerCase() + "-" + f[1].toLowerCase() : f[0].toLowerCase() + "-" + f[1].toUpperCase()
                }
                if (0 === b.length || b.indexOf(e) > -1) {
                    a = e;
                    break
                }
            }
        }(), a || (a = P.fallbackLng[0]), a
    }

    Array.prototype.indexOf || (Array.prototype.indexOf = function (a) {
        "use strict";
        if (null == this)throw new TypeError;
        var b = Object(this), c = b.length >>> 0;
        if (0 === c)return -1;
        var d = 0;
        if (arguments.length > 0 && (d = Number(arguments[1]), d != d ? d = 0 : 0 != d && 1 / 0 != d && d != -1 / 0 && (d = (d > 0 || -1) * Math.floor(Math.abs(d)))), d >= c)return -1;
        for (var e = d >= 0 ? d : Math.max(c - Math.abs(d), 0); c > e; e++)if (e in b && b[e] === a)return e;
        return -1
    }), Array.prototype.lastIndexOf || (Array.prototype.lastIndexOf = function (a) {
        "use strict";
        if (null == this)throw new TypeError;
        var b = Object(this), c = b.length >>> 0;
        if (0 === c)return -1;
        var d = c;
        arguments.length > 1 && (d = Number(arguments[1]), d != d ? d = 0 : 0 != d && d != 1 / 0 && d != -(1 / 0) && (d = (d > 0 || -1) * Math.floor(Math.abs(d))));
        for (var e = d >= 0 ? Math.min(d, c - 1) : c - Math.abs(d); e >= 0; e--)if (e in b && b[e] === a)return e;
        return -1
    }), "function" != typeof String.prototype.trim && (String.prototype.trim = function () {
        return this.replace(/^\s+|\s+$/g, "")
    });
    var F, G = this, H = G.jQuery || G.Zepto, I = {}, J = {}, K = 0, L = [], M = !1, N = {};
    if ("undefined" != typeof module && module.exports) {
        if (!H)try {
            H = require("jquery")
        } catch (O) {
        }
        H && (H.i18n = H.i18n || I), module.exports = I
    } else H && (H.i18n = H.i18n || I), G.i18n = G.i18n || I;
    N = {
        load: function (a, b, c) {
            b.useLocalStorage ? N._loadLocal(a, b, function (d, e) {
                for (var f = [], g = 0, h = a.length; h > g; g++)e[a[g]] || f.push(a[g]);
                f.length > 0 ? N._fetch(f, b, function (a, b) {
                    T.extend(e, b), N._storeLocal(b), c(null, e)
                }) : c(null, e)
            }) : N._fetch(a, b, function (a, b) {
                c(null, b)
            })
        }, _loadLocal: function (a, b, c) {
            var d = {}, e = (new Date).getTime();
            if (window.localStorage) {
                var f = a.length;
                T.each(a, function (a, g) {
                    var h = window.localStorage.getItem("res_" + g);
                    h && (h = JSON.parse(h), h.i18nStamp && h.i18nStamp + b.localStorageExpirationTime > e && (d[g] = h)), f--, 0 === f && c(null, d)
                })
            }
        }, _storeLocal: function (a) {
            if (window.localStorage)for (var b in a)a[b].i18nStamp = (new Date).getTime(), T.localStorage.setItem("res_" + b, JSON.stringify(a[b]))
        }, _fetch: function (a, b, c) {
            var d = b.ns, e = {};
            if (b.dynamicLoad) {
                var f = function (a, b) {
                    c(null, b)
                };
                if ("function" == typeof b.customLoad)b.customLoad(a, d.namespaces, b, f); else {
                    var g = t(b.resGetPath, {lng: a.join("+"), ns: d.namespaces.join("+")});
                    T.ajax({
                        url: g, success: function (a) {
                            T.log("loaded: " + g), f(null, a)
                        }, error: function (a, b, c) {
                            T.log("failed loading: " + g), f("failed loading resource.json error: " + c)
                        }, dataType: "json", async: b.getAsync
                    })
                }
            } else {
                var h, i = d.namespaces.length * a.length;
                T.each(d.namespaces, function (d, f) {
                    T.each(a, function (a, d) {
                        var g = function (a, b) {
                            a && (h = h || [], h.push(a)), e[d] = e[d] || {}, e[d][f] = b, i--, 0 === i && c(h, e)
                        };
                        "function" == typeof b.customLoad ? b.customLoad(d, f, b, g) : N._fetchOne(d, f, b, g)
                    })
                })
            }
        }, _fetchOne: function (a, b, c, d) {
            var e = t(c.resGetPath, {lng: a, ns: b});
            T.ajax({
                url: e, success: function (a) {
                    T.log("loaded: " + e), d(null, a)
                }, error: function (a, b, c) {
                    if (b && 200 == b || a && a.status && 200 == a.status)T.error("There is a typo in: " + e); else if (b && 404 == b || a && a.status && 404 == a.status)T.log("Does not exist: " + e); else {
                        var f = b ? b : a && a.status ? a.status : null;
                        T.log(f + " when loading " + e)
                    }
                    d(c, {})
                }, dataType: "json", async: c.getAsync
            })
        }, postMissing: function (a, b, c, d, e) {
            var f = {};
            f[c] = d;
            var g = [];
            if ("fallback" === P.sendMissingTo && P.fallbackLng[0] !== !1)for (var h = 0; h < P.fallbackLng.length; h++)g.push({
                lng: P.fallbackLng[h],
                url: t(P.resPostPath, {lng: P.fallbackLng[h], ns: b})
            }); else if ("current" === P.sendMissingTo || "fallback" === P.sendMissingTo && P.fallbackLng[0] === !1)g.push({
                lng: a,
                url: t(P.resPostPath, {lng: a, ns: b})
            }); else if ("all" === P.sendMissingTo)for (var h = 0, i = e.length; i > h; h++)g.push({
                lng: e[h],
                url: t(P.resPostPath, {lng: e[h], ns: b})
            });
            for (var j = 0, k = g.length; k > j; j++) {
                var l = g[j];
                T.ajax({
                    url: l.url, type: P.sendType, data: f, success: function () {
                        T.log("posted missing key '" + c + "' to: " + l.url);
                        for (var a = c.split("."), e = 0, f = J[l.lng][b]; a[e];)f = f[a[e]] = e === a.length - 1 ? d : f[a[e]] || {}, e++
                    }, error: function () {
                        T.log("failed posting missing key '" + c + "' to: " + l.url)
                    }, dataType: "json", async: P.postAsync
                })
            }
        }, reload: r
    };
    var P = {
        lng: void 0,
        load: "all",
        preload: [],
        lowerCaseLng: !1,
        returnObjectTrees: !1,
        fallbackLng: ["dev"],
        fallbackNS: [],
        detectLngQS: "setLng",
        detectLngFromLocalStorage: !1,
        ns: "translation",
        fallbackOnNull: !0,
        fallbackOnEmpty: !1,
        fallbackToDefaultNS: !1,
        nsseparator: ":",
        keyseparator: ".",
        selectorAttr: "data-i18n",
        debug: !1,
        resGetPath: "locales/__lng__/__ns__.json",
        resPostPath: "locales/add/__lng__/__ns__",
        getAsync: !0,
        postAsync: !0,
        resStore: void 0,
        useLocalStorage: !1,
        localStorageExpirationTime: 6048e5,
        dynamicLoad: !1,
        sendMissing: !1,
        sendMissingTo: "fallback",
        sendType: "POST",
        interpolationPrefix: "__",
        interpolationSuffix: "__",
        defaultVariables: !1,
        reusePrefix: "$t(",
        reuseSuffix: ")",
        pluralSuffix: "_plural",
        pluralNotFound: ["plural_not_found", Math.random()].join(""),
        contextNotFound: ["context_not_found", Math.random()].join(""),
        escapeInterpolation: !1,
        indefiniteSuffix: "_indefinite",
        indefiniteNotFound: ["indefinite_not_found", Math.random()].join(""),
        setJqueryExt: !0,
        defaultValueFromContent: !0,
        useDataAttrOptions: !1,
        cookieExpirationTime: void 0,
        useCookie: !0,
        cookieName: "i18next",
        cookieDomain: void 0,
        objectTreeKeyHandler: void 0,
        postProcess: void 0,
        parseMissingKey: void 0,
        missingKeyHandler: N.postMissing,
        shortcutFunction: "sprintf"
    }, Q = {
        "&": "&amp;",
        "<": "&lt;",
        ">": "&gt;",
        '"': "&quot;",
        "'": "&#39;",
        "/": "&#x2F;"
    }, R = {
        create: function (a, b, c, d) {
            var e;
            if (c) {
                var f = new Date;
                f.setTime(f.getTime() + 1e3 * 60 * c), e = "; expires=" + f.toGMTString()
            } else e = "";
            d = d ? "domain=" + d + ";" : "", document.cookie = a + "=" + b + e + ";" + d + "path=/"
        }, read: function (a) {
            for (var b = a + "=", c = document.cookie.split(";"), d = 0; d < c.length; d++) {
                for (var e = c[d]; " " == e.charAt(0);)e = e.substring(1, e.length);
                if (0 === e.indexOf(b))return e.substring(b.length, e.length)
            }
            return null
        }, remove: function (a) {
            this.create(a, "", -1)
        }
    }, S = {
        create: function () {
        }, read: function () {
            return null
        }, remove: function () {
        }
    }, T = {
        extend: H ? H.extend : a,
        deepExtend: b,
        each: H ? H.each : c,
        ajax: H ? H.ajax : "undefined" != typeof document ? e : function () {
        },
        cookie: "undefined" != typeof document ? R : S,
        detectLanguage: E,
        escape: d,
        log: function (a) {
            P.debug && "undefined" != typeof console && console.log(a)
        },
        error: function (a) {
            "undefined" != typeof console && console.error(a)
        },
        getCountyIndexOfLng: function (a) {
            var b = 0;
            return ("nb-NO" === a || "nn-NO" === a || "nb-no" === a || "nn-no" === a) && (b = 1), b
        },
        toLanguages: function (a) {
            function b(a) {
                var b = a;
                if ("string" == typeof a && a.indexOf("-") > -1) {
                    var c = a.split("-");
                    b = P.lowerCaseLng ? c[0].toLowerCase() + "-" + c[1].toLowerCase() : c[0].toLowerCase() + "-" + c[1].toUpperCase()
                } else b = P.lowerCaseLng ? a.toLowerCase() : a;
                return b
            }

            var c = this.log, d = [], e = P.lngWhitelist || !1, f = function (a) {
                !e || e.indexOf(a) > -1 ? d.push(a) : c("rejecting non-whitelisted language: " + a)
            };
            if ("string" == typeof a && a.indexOf("-") > -1) {
                var g = a.split("-");
                "unspecific" !== P.load && f(b(a)), "current" !== P.load && f(b(g[this.getCountyIndexOfLng(a)]))
            } else f(b(a));
            for (var h = 0; h < P.fallbackLng.length; h++)-1 === d.indexOf(P.fallbackLng[h]) && P.fallbackLng[h] && d.push(b(P.fallbackLng[h]));
            return d
        },
        regexEscape: function (a) {
            return a.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&")
        },
        regexReplacementEscape: function (a) {
            return "string" == typeof a ? a.replace(/\$/g, "$$$$") : a
        },
        localStorage: {
            setItem: function (a, b) {
                if (window.localStorage)try {
                    window.localStorage.setItem(a, b)
                } catch (c) {
                    T.log('failed to set value for key "' + a + '" to localStorage.')
                }
            }
        }
    };
    T.applyReplacement = t;
    var U = [["ach", "Acholi", [1, 2], 1], ["af", "Afrikaans", [1, 2], 2], ["ak", "Akan", [1, 2], 1], ["am", "Amharic", [1, 2], 1], ["an", "Aragonese", [1, 2], 2], ["ar", "Arabic", [0, 1, 2, 3, 11, 100], 5], ["arn", "Mapudungun", [1, 2], 1], ["ast", "Asturian", [1, 2], 2], ["ay", "Aymará", [1], 3], ["az", "Azerbaijani", [1, 2], 2], ["be", "Belarusian", [1, 2, 5], 4], ["bg", "Bulgarian", [1, 2], 2], ["bn", "Bengali", [1, 2], 2], ["bo", "Tibetan", [1], 3], ["br", "Breton", [1, 2], 1], ["bs", "Bosnian", [1, 2, 5], 4], ["ca", "Catalan", [1, 2], 2], ["cgg", "Chiga", [1], 3], ["cs", "Czech", [1, 2, 5], 6], ["csb", "Kashubian", [1, 2, 5], 7], ["cy", "Welsh", [1, 2, 3, 8], 8], ["da", "Danish", [1, 2], 2], ["de", "German", [1, 2], 2], ["dev", "Development Fallback", [1, 2], 2], ["dz", "Dzongkha", [1], 3], ["el", "Greek", [1, 2], 2], ["en", "English", [1, 2], 2], ["eo", "Esperanto", [1, 2], 2], ["es", "Spanish", [1, 2], 2], ["es_ar", "Argentinean Spanish", [1, 2], 2], ["et", "Estonian", [1, 2], 2], ["eu", "Basque", [1, 2], 2], ["fa", "Persian", [1], 3], ["fi", "Finnish", [1, 2], 2], ["fil", "Filipino", [1, 2], 1], ["fo", "Faroese", [1, 2], 2], ["fr", "French", [1, 2], 9], ["fur", "Friulian", [1, 2], 2], ["fy", "Frisian", [1, 2], 2], ["ga", "Irish", [1, 2, 3, 7, 11], 10], ["gd", "Scottish Gaelic", [1, 2, 3, 20], 11], ["gl", "Galician", [1, 2], 2], ["gu", "Gujarati", [1, 2], 2], ["gun", "Gun", [1, 2], 1], ["ha", "Hausa", [1, 2], 2], ["he", "Hebrew", [1, 2], 2], ["hi", "Hindi", [1, 2], 2], ["hr", "Croatian", [1, 2, 5], 4], ["hu", "Hungarian", [1, 2], 2], ["hy", "Armenian", [1, 2], 2], ["ia", "Interlingua", [1, 2], 2], ["id", "Indonesian", [1], 3], ["is", "Icelandic", [1, 2], 12], ["it", "Italian", [1, 2], 2], ["ja", "Japanese", [1], 3], ["jbo", "Lojban", [1], 3], ["jv", "Javanese", [0, 1], 13], ["ka", "Georgian", [1], 3], ["kk", "Kazakh", [1], 3], ["km", "Khmer", [1], 3], ["kn", "Kannada", [1, 2], 2], ["ko", "Korean", [1], 3], ["ku", "Kurdish", [1, 2], 2], ["kw", "Cornish", [1, 2, 3, 4], 14], ["ky", "Kyrgyz", [1], 3], ["lb", "Letzeburgesch", [1, 2], 2], ["ln", "Lingala", [1, 2], 1], ["lo", "Lao", [1], 3], ["lt", "Lithuanian", [1, 2, 10], 15], ["lv", "Latvian", [1, 2, 0], 16], ["mai", "Maithili", [1, 2], 2], ["mfe", "Mauritian Creole", [1, 2], 1], ["mg", "Malagasy", [1, 2], 1], ["mi", "Maori", [1, 2], 1], ["mk", "Macedonian", [1, 2], 17], ["ml", "Malayalam", [1, 2], 2], ["mn", "Mongolian", [1, 2], 2], ["mnk", "Mandinka", [0, 1, 2], 18], ["mr", "Marathi", [1, 2], 2], ["ms", "Malay", [1], 3], ["mt", "Maltese", [1, 2, 11, 20], 19], ["nah", "Nahuatl", [1, 2], 2], ["nap", "Neapolitan", [1, 2], 2], ["nb", "Norwegian Bokmal", [1, 2], 2], ["ne", "Nepali", [1, 2], 2], ["nl", "Dutch", [1, 2], 2], ["nn", "Norwegian Nynorsk", [1, 2], 2], ["no", "Norwegian", [1, 2], 2], ["nso", "Northern Sotho", [1, 2], 2], ["oc", "Occitan", [1, 2], 1], ["or", "Oriya", [2, 1], 2], ["pa", "Punjabi", [1, 2], 2], ["pap", "Papiamento", [1, 2], 2], ["pl", "Polish", [1, 2, 5], 7], ["pms", "Piemontese", [1, 2], 2], ["ps", "Pashto", [1, 2], 2], ["pt", "Portuguese", [1, 2], 2], ["pt_br", "Brazilian Portuguese", [1, 2], 2], ["rm", "Romansh", [1, 2], 2], ["ro", "Romanian", [1, 2, 20], 20], ["ru", "Russian", [1, 2, 5], 4], ["sah", "Yakut", [1], 3], ["sco", "Scots", [1, 2], 2], ["se", "Northern Sami", [1, 2], 2], ["si", "Sinhala", [1, 2], 2], ["sk", "Slovak", [1, 2, 5], 6], ["sl", "Slovenian", [5, 1, 2, 3], 21], ["so", "Somali", [1, 2], 2], ["son", "Songhay", [1, 2], 2], ["sq", "Albanian", [1, 2], 2], ["sr", "Serbian", [1, 2, 5], 4], ["su", "Sundanese", [1], 3], ["sv", "Swedish", [1, 2], 2], ["sw", "Swahili", [1, 2], 2], ["ta", "Tamil", [1, 2], 2], ["te", "Telugu", [1, 2], 2], ["tg", "Tajik", [1, 2], 1], ["th", "Thai", [1], 3], ["ti", "Tigrinya", [1, 2], 1], ["tk", "Turkmen", [1, 2], 2], ["tr", "Turkish", [1, 2], 1], ["tt", "Tatar", [1], 3], ["ug", "Uyghur", [1], 3], ["uk", "Ukrainian", [1, 2, 5], 4], ["ur", "Urdu", [1, 2], 2], ["uz", "Uzbek", [1, 2], 1], ["vi", "Vietnamese", [1], 3], ["wa", "Walloon", [1, 2], 1], ["wo", "Wolof", [1], 3], ["yo", "Yoruba", [1, 2], 2], ["zh", "Chinese", [1], 3]], V = {
        1: function (a) {
            return Number(a > 1)
        }, 2: function (a) {
            return Number(1 != a)
        }, 3: function () {
            return 0
        }, 4: function (a) {
            return Number(1 == a % 10 && 11 != a % 100 ? 0 : a % 10 >= 2 && 4 >= a % 10 && (10 > a % 100 || a % 100 >= 20) ? 1 : 2)
        }, 5: function (a) {
            return Number(0 === a ? 0 : 1 == a ? 1 : 2 == a ? 2 : a % 100 >= 3 && 10 >= a % 100 ? 3 : a % 100 >= 11 ? 4 : 5)
        }, 6: function (a) {
            return Number(1 == a ? 0 : a >= 2 && 4 >= a ? 1 : 2)
        }, 7: function (a) {
            return Number(1 == a ? 0 : a % 10 >= 2 && 4 >= a % 10 && (10 > a % 100 || a % 100 >= 20) ? 1 : 2)
        }, 8: function (a) {
            return Number(1 == a ? 0 : 2 == a ? 1 : 8 != a && 11 != a ? 2 : 3)
        }, 9: function (a) {
            return Number(a >= 2)
        }, 10: function (a) {
            return Number(1 == a ? 0 : 2 == a ? 1 : 7 > a ? 2 : 11 > a ? 3 : 4)
        }, 11: function (a) {
            return Number(1 == a || 11 == a ? 0 : 2 == a || 12 == a ? 1 : a > 2 && 20 > a ? 2 : 3)
        }, 12: function (a) {
            return Number(1 != a % 10 || 11 == a % 100)
        }, 13: function (a) {
            return Number(0 !== a)
        }, 14: function (a) {
            return Number(1 == a ? 0 : 2 == a ? 1 : 3 == a ? 2 : 3)
        }, 15: function (a) {
            return Number(1 == a % 10 && 11 != a % 100 ? 0 : a % 10 >= 2 && (10 > a % 100 || a % 100 >= 20) ? 1 : 2)
        }, 16: function (a) {
            return Number(1 == a % 10 && 11 != a % 100 ? 0 : 0 !== a ? 1 : 2)
        }, 17: function (a) {
            return Number(1 == a || 1 == a % 10 ? 0 : 1)
        }, 18: function (a) {
            return Number(1 == a ? 1 : 2)
        }, 19: function (a) {
            return Number(1 == a ? 0 : 0 === a || a % 100 > 1 && 11 > a % 100 ? 1 : a % 100 > 10 && 20 > a % 100 ? 2 : 3)
        }, 20: function (a) {
            return Number(1 == a ? 0 : 0 === a || a % 100 > 0 && 20 > a % 100 ? 1 : 2)
        }, 21: function (a) {
            return Number(1 == a % 100 ? 1 : 2 == a % 100 ? 2 : 3 == a % 100 || 4 == a % 100 ? 3 : 0)
        }
    }, W = {
        rules: function () {
            var a, b = {};
            for (a = U.length; a--;)b[U[a][0]] = {name: U[a][1], numbers: U[a][2], plurals: V[U[a][3]]};
            return b
        }(), addRule: function (a, b) {
            W.rules[a] = b
        }, setCurrentLng: function (a) {
            if (!W.currentRule || W.currentRule.lng !== a) {
                var b = a.split("-");
                W.currentRule = {lng: a, rule: W.rules[b[0]]}
            }
        }, needsPlural: function (a, b) {
            var c, d = a.split("-");
            return c = W.currentRule && W.currentRule.lng === a ? W.currentRule.rule : W.rules[d[T.getCountyIndexOfLng(a)]], c && c.numbers.length <= 1 ? !1 : 1 !== this.get(a, b)
        }, get: function (a, b) {
            function c(b, c) {
                var d;
                if (d = W.currentRule && W.currentRule.lng === a ? W.currentRule.rule : W.rules[b]) {
                    var e;
                    e = d.noAbs ? d.plurals(c) : d.plurals(Math.abs(c));
                    var f = d.numbers[e];
                    return 2 === d.numbers.length && 1 === d.numbers[0] && (2 === f ? f = -1 : 1 === f && (f = 1)), f
                }
                return 1 === c ? "1" : "-1"
            }

            var d = a.split("-");
            return c(d[T.getCountyIndexOfLng(a)], b)
        }
    }, X = {}, Y = function (a, b) {
        X[a] = b
    }, Z = function () {
        function a(a) {
            return Object.prototype.toString.call(a).slice(8, -1).toLowerCase()
        }

        function b(a, b) {
            for (var c = []; b > 0; c[--b] = a);
            return c.join("")
        }

        var c = function () {
            return c.cache.hasOwnProperty(arguments[0]) || (c.cache[arguments[0]] = c.parse(arguments[0])), c.format.call(null, c.cache[arguments[0]], arguments)
        };
        return c.format = function (c, d) {
            var e, f, g, h, i, j, k, l = 1, m = c.length, n = "", o = [];
            for (f = 0; m > f; f++)if (n = a(c[f]), "string" === n)o.push(c[f]); else if ("array" === n) {
                if (h = c[f], h[2])for (e = d[l], g = 0; g < h[2].length; g++) {
                    if (!e.hasOwnProperty(h[2][g]))throw Z('[sprintf] property "%s" does not exist', h[2][g]);
                    e = e[h[2][g]]
                } else e = h[1] ? d[h[1]] : d[l++];
                if (/[^s]/.test(h[8]) && "number" != a(e))throw Z("[sprintf] expecting number but found %s", a(e));
                switch (h[8]) {
                    case"b":
                        e = e.toString(2);
                        break;
                    case"c":
                        e = String.fromCharCode(e);
                        break;
                    case"d":
                        e = parseInt(e, 10);
                        break;
                    case"e":
                        e = h[7] ? e.toExponential(h[7]) : e.toExponential();
                        break;
                    case"f":
                        e = h[7] ? parseFloat(e).toFixed(h[7]) : parseFloat(e);
                        break;
                    case"o":
                        e = e.toString(8);
                        break;
                    case"s":
                        e = (e = String(e)) && h[7] ? e.substring(0, h[7]) : e;
                        break;
                    case"u":
                        e = Math.abs(e);
                        break;
                    case"x":
                        e = e.toString(16);
                        break;
                    case"X":
                        e = e.toString(16).toUpperCase()
                }
                e = /[def]/.test(h[8]) && h[3] && e >= 0 ? "+" + e : e, j = h[4] ? "0" == h[4] ? "0" : h[4].charAt(1) : " ", k = h[6] - String(e).length, i = h[6] ? b(j, k) : "", o.push(h[5] ? e + i : i + e)
            }
            return o.join("")
        }, c.cache = {}, c.parse = function (a) {
            for (var b = a, c = [], d = [], e = 0; b;) {
                if (null !== (c = /^[^\x25]+/.exec(b)))d.push(c[0]); else if (null !== (c = /^\x25{2}/.exec(b)))d.push("%"); else {
                    if (null === (c = /^\x25(?:([1-9]\d*)\$|\(([^\)]+)\))?(\+)?(0|'[^$])?(-)?(\d+)?(?:\.(\d+))?([b-fosuxX])/.exec(b)))throw"[sprintf] huh?";
                    if (c[2]) {
                        e |= 1;
                        var f = [], g = c[2], h = [];
                        if (null === (h = /^([a-z_][a-z_\d]*)/i.exec(g)))throw"[sprintf] huh?";
                        for (f.push(h[1]); "" !== (g = g.substring(h[0].length));)if (null !== (h = /^\.([a-z_][a-z_\d]*)/i.exec(g)))f.push(h[1]); else {
                            if (null === (h = /^\[(\d+)\]/.exec(g)))throw"[sprintf] huh?";
                            f.push(h[1])
                        }
                        c[2] = f
                    } else e |= 2;
                    if (3 === e)throw"[sprintf] mixing positional and named placeholders is not (yet) supported";
                    d.push(c)
                }
                b = b.substring(c[0].length)
            }
            return d
        }, c
    }(), $ = function (a, b) {
        return b.unshift(a), Z.apply(null, b)
    };
    Y("sprintf", function (a, b, c) {
        return c.sprintf ? "[object Array]" === Object.prototype.toString.apply(c.sprintf) ? $(a, c.sprintf) : "object" == typeof c.sprintf ? Z(a, c.sprintf) : a : a
    }), I.init = f, I.setLng = p, I.preload = g, I.addResourceBundle = h, I.hasResourceBundle = i, I.addResource = k, I.addResources = l, I.removeResourceBundle = j, I.loadNamespace = n, I.loadNamespaces = o, I.setDefaultNamespace = m, I.t = z, I.translate = z, I.exists = y, I.detectLanguage = T.detectLanguage, I.pluralExtensions = W, I.sync = N, I.functions = T, I.lng = q, I.addPostProcessor = Y, I.options = P
}();