window.addEventListener("load", function () {
	function e(e) {
		(c.style.top = `${e}px`),
			(u.style.top = `${e}px`),
			(m.style.top = `${e}px`),
			h && (h.style.top = `${e + 80}px`);
	}
	function t() {
		if (g.length) for (let e of g) e.addEventListener("mouseenter", n, !1);
	}
	function n(e) {
		var t,
			s = e.target;
		(p = s.getAttribute("data-menu-identifier")),
			(version = s.getAttribute("data-version")),
			p &&
				version &&
				((req = new XMLHttpRequest()),
				req.open("GET", v + `?menuIdentifier=${p}&version=${version}`, !0),
				req.send(),
				(req.onreadystatechange = function () {
					req.readyState === XMLHttpRequest.DONE &&
						(200 === req.status
							? (a >= 1024
									? (s.childNodes[3].childNodes[1].innerHTML = req.responseText)
									: ((t = s.getAttribute("data-submenu")),
									  (document.getElementById(t).innerHTML = req.responseText)),
							  s.setAttribute("data-menu-loaded", !0),
							  s.removeEventListener("mouseenter", n))
							: console.log("There was a problem with the request."));
				}));
	}
	var a = Math.max(
			document.documentElement.clientWidth,
			window.innerWidth || 0
		),
		s = window.pageYOffset,
		o = document.getElementsByClassName("banner-section-container")[0],
		r = document.getElementById("header");
	const i = document.getElementsByClassName("text-prefixer");
	var d, l;
	const c = document.querySelector("#header .header-base"),
		u = document.getElementById("wrapper"),
		m = document.getElementById("promotional-bar-controller"),
		g = document.getElementsByClassName("navbar-menu-toggler"),
		v = "/fetch-menu-content",
		h = document.getElementById("sticky-nav-list-container");
	var p;
	// if ((t(), o)) {
	// 	var f = o.getBoundingClientRect(),
	// 		y = f.top + f.height;
	// 	a >= 1024 && s > y
	// 		? (c.classList.add("hidden-top-navbar"),
	// 		  document
	// 				.querySelector(".listing-types-container")
	// 				.classList.add("sticky-banner-dock"))
	// 		: a >= 1024 &&
	// 		  (c.classList.remove("hidden-top-navbar"),
	// 		  document
	// 				.querySelector(".listing-types-container")
	// 				.classList.remove("sticky-banner-dock"));
	// }
	if (a < 1024) {
		const t = document.querySelector("#header-mobile-nav-opener"),
			n = document.querySelector("#mobile-nav-drop"),
			a = document.querySelector("#header-search-opener"),
			s = document.querySelector("#header .search-slide"),
			o = document.getElementById("js-promotionalBar"),
			r = document.getElementById("promotional-bar-cb"),
			i = document.querySelectorAll(".dropdown-toggler-input");
		if (
			(E(),
			t.addEventListener("click", (e) => {
				e.stopPropagation(),
					toggleClass(t, "hamburger-slide-in"),
					toggleClass(n, "slideIn"),
					toggleClass(document.querySelector("body"), "has-modal");
			}),
			a.addEventListener("click", () => {
				toggleClass(s, "showBlock"),
					toggleClass(document.querySelector("body"), "has-modal");
			}),
			o)
		) {
			var L = o.offsetHeight;
			e(L),
				r.addEventListener("click", () => {
					r.checked
						? (e(0), (o.style.top = `-${L}px`))
						: (e(L), (o.style.top = 0));
				});
		}
		function E() {
			if (i.length) for (let e of i) e.onclick = b;
		}
		function b(e) {
			i.forEach((t) => {
				t != e.target && (t.checked = !1);
			});
		}
	}
	if (
		("true" == r.getAttribute("data-scroll-white-nav") &&
			((d = !!r.classList.contains("transparent-nav")),
			s > 50 &&
				(d && r.classList.remove("transparent-nav"),
				r.classList.add("white-nav")),
			document.addEventListener("scroll", () => {
				(s = window.pageYOffset) > 50
					? (d && r.classList.remove("transparent-nav"),
					  r.classList.add("white-nav"))
					: (d && r.classList.add("transparent-nav"),
					  r.classList.remove("white-nav"));
			})),
		"true" == r.getAttribute("data-scroll-half-nav") &&
			((l = !!r.classList.contains("half-nav")),
			s > 50 && (l || r.classList.add("half-nav")),
			document.addEventListener("scroll", () => {
				(s = window.pageYOffset) > 50
					? l || r.classList.add("half-nav")
					: r.classList.remove("half-nav");
			})),
		i.length)
	)
		for (let e of i) {
			var w = e.getAttribute("data-text-prefix");
			e.innerHTML = w + " " + e.innerHTML;
		}
	window.addEventListener("click", function (e) {
		if ("sign-out-link" === e.target.id) {
			const e = new CustomEvent("userLoggedOut");
			document.dispatchEvent(e);
		}
	});
});
const toggleClass = (e, t) =>
	e.classList.contains(t) ? e.classList.remove(t) : e.classList.add(t);
var adasdashdkasjda = 1;
/////////////////////////////////
function initScrollHandler() {
	let e, t;
	if ($(".post-holder").length)
		if (
			((t = $(".post-holder").offset().top + $(".post-holder").outerHeight(!0)),
			$("#sidebar-sticky-element").offset())
		) {
			const n =
				$("#sidebar-sticky-element").offset().top +
				$("#sidebar-sticky-element").outerHeight(!0);
			e = t > n;
		} else e = !1;
	else e = !1;
	var n = !1;
	$(window).on("scroll", () => {
		(n = !0),
			setInterval(() => {
				n && (i(), (n = !1));
			}, 200);
	});
	const i = () => {
		viewportWidth >= 1024 && e && stickyElementScroll(),
			viewportWidth >= 1024 && stickyNavbarScroll(),
			stickyBannerDock(),
			stickyHelpfulButtons();
	};
}
function stickyElementScroll() {
	var e = stickyElement,
		t =
			$(".main-content-section").position().top +
			$(".main-content-section").outerHeight(!0) -
			100,
		n =
			$(".main-content-section").position().top +
			$(".main-content-section").outerHeight(!0) -
			870,
		i = window.pageYOffset;
	i >= n
		? $("#sidebar-sticky-element")
				.addClass("stickBottom")
				.removeClass("stickyMode")
		: i >= e && i <= t
		? $("#sidebar-sticky-element")
				.addClass("stickyMode")
				.removeClass("stickBottom")
		: $("#sidebar-sticky-element").removeClass("stickyMode stickBottom");
}
function stickyNavbarScroll() {
	var e = window.pageYOffset,
		t = $(".banner-section-container");
	t.length &&
		(e >= t.position().top + t.outerHeight(!0)
			? $("#header .header-base").addClass("hidden-top-navbar")
			: ($("ul.slide").removeClass("showBlock"),
			  $("#header .header-base").removeClass("hidden-top-navbar")));
}
function navigateToEnquiryForm() {
	window.scroll({
		top: enquiryFormCoords.top - 114,
		left: 0,
		behavior: "smooth",
	});
}
function stickyBannerDock() {
	var e = window.pageYOffset,
		t = $(".banner-section-container");
	t.length &&
		(e >= t.position().top + t.outerHeight(!0) - 10
			? $(".listing-types-container").addClass("sticky-banner-dock")
			: $(".listing-types-container").removeClass("sticky-banner-dock"));
}
function stickyHelpfulButtons() {
	$(window).scrollTop() > 400
		? (scrollToTopButton.length && scrollToTopButton.addClass("show"),
		  callbtn.length && callbtn.addClass("show"))
		: (scrollToTopButton.length && scrollToTopButton.removeClass("show"),
		  callbtn.length && callbtn.removeClass("show"));
}
function recalculateSidebarCoords() {
	stickyElement =
		$("#sidebar-sticky-element").offset() &&
		$("#sidebar-sticky-element").offset().top - 100;
}
function search_url(e, t, n) {
	return t
		? "/search/" + t + e + "?limit=10&query=" + n
		: "/search" + e + "?limit=10&query=" + n;
}
function initSlick() {
	$(".tour-carousel").slick({
		slidesToScroll: 4,
		slidesToShow: 4,
		rows: 0,
		infinite: !0,
		dots: !0,
		pauseOnHover: !1,
		prevArrow:
			'<a href="#" class="slick-prev"><span class=\'icon-left-arrow\'></a>',
		nextArrow:
			'<a href="#" class="slick-next"><span class=\'icon-right-arrow\'></a>',
		variableWidth: !0,
		responsive: [
			{ breakpoint: 1200, settings: { slidesToScroll: 3, slidesToShow: 3 } },
			{ breakpoint: 1024, settings: "unslick" },
		],
	}),
		$(".collection-carousel").slick({
			slidesToScroll: 4,
			slidesToShow: 4,
			rows: 0,
			infinite: !0,
			dots: !0,
			pauseOnHover: !1,
			prevArrow:
				'<a href="#" class="slick-prev"><span class=\'icon-left-arrow\'></a>',
			nextArrow:
				'<a href="#" class="slick-next"><span class=\'icon-right-arrow\'></a>',
			variableWidth: !0,
			responsive: [
				{ breakpoint: 1200, settings: { slidesToScroll: 3, slidesToShow: 3 } },
				{
					breakpoint: 1024,
					settings: { slidesToScroll: 2, slidesToShow: 2, variableWidth: !1 },
				},
				{ breakpoint: 769, settings: { slidesToScroll: 2, slidesToShow: 2 } },
				{ breakpoint: 481, settings: "unslick" },
			],
		}),
		$(".banner-ad-carousel").slick({
			autoplay: !0,
			slidesToScroll: 1,
			slidesToShow: 1,
			rows: 0,
			infinite: !0,
			dots: !0,
			pauseOnHover: !1,
			prevArrow:
				'<a href="#" class="slick-prev"><span class=\'icon-left-arrow\'></a>',
			nextArrow:
				'<a href="#" class="slick-next"><span class=\'icon-right-arrow\'></a>',
		}),
		$("#deals-slider").slick({
			slidesToScroll: 5,
			slidesToShow: 5,
			rows: 0,
			infinite: !0,
			dots: !0,
			pauseOnHover: !1,
			prevArrow:
				'<a href="#" class="slick-prev"><span class=\'icon-left-arrow\'></a>',
			nextArrow:
				'<a href="#" class="slick-next"><span class=\'icon-right-arrow\'></a>',
			variableWidth: !0,
			responsive: [
				{ breakpoint: 1200, settings: { slidesToScroll: 5, slidesToShow: 5 } },
				{
					breakpoint: 1024,
					settings: { slidesToScroll: 4, slidesToShow: 4, variableWidth: !1 },
				},
				{ breakpoint: 769, settings: { slidesToScroll: 3, slidesToShow: 3 } },
				{ breakpoint: 481, settings: "unslick" },
			],
		}),
		$(".banner-wrapper").slick({
			slidesToScroll: 1,
			slidesToShow: 1,
			rows: 0,
			infinite: !0,
			dots: !0,
			pauseOnHover: !1,
			arrows: !0,
			prevArrow:
				'<a href="#" class="slick-prev"><span class=\'icon-left-arrow\'></a>',
			nextArrow:
				'<a href="#" class="slick-next"><span class=\'icon-right-arrow\'></a>',
			dots: !1,
			responsive: [{ breakpoint: 1023, settings: { arrows: !1, dots: !0 } }],
		});
}
let stickyElement;
!(function (e, t) {
	"use strict";
	"object" == typeof module && "object" == typeof module.exports
		? (module.exports = e.document
				? t(e, !0)
				: function (e) {
						if (!e.document)
							throw new Error("jQuery requires a window with a document");
						return t(e);
				  })
		: t(e);
})("undefined" != typeof window ? window : this, function (e, t) {
	"use strict";
	function n(e, t, n) {
		var i,
			o = (t = t || se).createElement("script");
		if (((o.text = e), n)) for (i in we) n[i] && (o[i] = n[i]);
		t.head.appendChild(o).parentNode.removeChild(o);
	}
	function i(e) {
		return null == e
			? e + ""
			: "object" == typeof e || "function" == typeof e
			? pe[he.call(e)] || "object"
			: typeof e;
	}
	function o(e) {
		var t = !!e && "length" in e && e.length,
			n = i(e);
		return (
			!me(e) &&
			!be(e) &&
			("array" === n ||
				0 === t ||
				("number" == typeof t && t > 0 && t - 1 in e))
		);
	}
	function r(e, t) {
		return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase();
	}
	function s(e, t, n) {
		return me(t)
			? ke.grep(e, function (e, i) {
					return !!t.call(e, i, e) !== n;
			  })
			: t.nodeType
			? ke.grep(e, function (e) {
					return (e === t) !== n;
			  })
			: "string" != typeof t
			? ke.grep(e, function (e) {
					return de.call(t, e) > -1 !== n;
			  })
			: ke.filter(t, e, n);
	}
	function a(e, t) {
		for (; (e = e[t]) && 1 !== e.nodeType; );
		return e;
	}
	function l(e) {
		var t = {};
		return (
			ke.each(e.match(Le) || [], function (e, n) {
				t[n] = !0;
			}),
			t
		);
	}
	function c(e) {
		return e;
	}
	function u(e) {
		throw e;
	}
	function d(e, t, n, i) {
		var o;
		try {
			e && me((o = e.promise))
				? o.call(e).done(t).fail(n)
				: e && me((o = e.then))
				? o.call(e, t, n)
				: t.apply(void 0, [e].slice(i));
		} catch (e) {
			n.apply(void 0, [e]);
		}
	}
	function p() {
		se.removeEventListener("DOMContentLoaded", p),
			e.removeEventListener("load", p),
			ke.ready();
	}
	function h(e, t) {
		return t.toUpperCase();
	}
	function f(e) {
		return e.replace(Ne, "ms-").replace(ze, h);
	}
	function g() {
		this.expando = ke.expando + g.uid++;
	}
	function v(e) {
		return (
			"true" === e ||
			("false" !== e &&
				("null" === e
					? null
					: e === +e + ""
					? +e
					: Be.test(e)
					? JSON.parse(e)
					: e))
		);
	}
	function y(e, t, n) {
		var i;
		if (void 0 === n && 1 === e.nodeType)
			if (
				((i = "data-" + t.replace(Re, "-$&").toLowerCase()),
				"string" == typeof (n = e.getAttribute(i)))
			) {
				try {
					n = v(n);
				} catch (e) {}
				Me.set(e, t, n);
			} else n = void 0;
		return n;
	}
	function m(e, t, n, i) {
		var o,
			r,
			s = 20,
			a = i
				? function () {
						return i.cur();
				  }
				: function () {
						return ke.css(e, t, "");
				  },
			l = a(),
			c = (n && n[3]) || (ke.cssNumber[t] ? "" : "px"),
			u = (ke.cssNumber[t] || ("px" !== c && +l)) && We.exec(ke.css(e, t));
		if (u && u[3] !== c) {
			for (l /= 2, c = c || u[3], u = +l || 1; s--; )
				ke.style(e, t, u + c),
					(1 - r) * (1 - (r = a() / l || 0.5)) <= 0 && (s = 0),
					(u /= r);
			(u *= 2), ke.style(e, t, u + c), (n = n || []);
		}
		return (
			n &&
				((u = +u || +l || 0),
				(o = n[1] ? u + (n[1] + 1) * n[2] : +n[2]),
				i && ((i.unit = c), (i.start = u), (i.end = o))),
			o
		);
	}
	function b(e) {
		var t,
			n = e.ownerDocument,
			i = e.nodeName,
			o = Ve[i];
		return (
			o ||
			((t = n.body.appendChild(n.createElement(i))),
			(o = ke.css(t, "display")),
			t.parentNode.removeChild(t),
			"none" === o && (o = "block"),
			(Ve[i] = o),
			o)
		);
	}
	function w(e, t) {
		for (var n, i, o = [], r = 0, s = e.length; r < s; r++)
			(i = e[r]).style &&
				((n = i.style.display),
				t
					? ("none" === n &&
							((o[r] = Pe.get(i, "display") || null),
							o[r] || (i.style.display = "")),
					  "" === i.style.display && Ke(i) && (o[r] = b(i)))
					: "none" !== n && ((o[r] = "none"), Pe.set(i, "display", n)));
		for (r = 0; r < s; r++) null != o[r] && (e[r].style.display = o[r]);
		return e;
	}
	function k(e, t) {
		var n;
		return (
			(n =
				"undefined" != typeof e.getElementsByTagName
					? e.getElementsByTagName(t || "*")
					: "undefined" != typeof e.querySelectorAll
					? e.querySelectorAll(t || "*")
					: []),
			void 0 === t || (t && r(e, t)) ? ke.merge([e], n) : n
		);
	}
	function x(e, t) {
		for (var n = 0, i = e.length; n < i; n++)
			Pe.set(e[n], "globalEval", !t || Pe.get(t[n], "globalEval"));
	}
	function T(e, t, n, o, r) {
		for (
			var s,
				a,
				l,
				c,
				u,
				d,
				p = t.createDocumentFragment(),
				h = [],
				f = 0,
				g = e.length;
			f < g;
			f++
		)
			if ((s = e[f]) || 0 === s)
				if ("object" === i(s)) ke.merge(h, s.nodeType ? [s] : s);
				else if (Ze.test(s)) {
					for (
						a = a || p.appendChild(t.createElement("div")),
							l = (Ye.exec(s) || ["", ""])[1].toLowerCase(),
							c = Je[l] || Je._default,
							a.innerHTML = c[1] + ke.htmlPrefilter(s) + c[2],
							d = c[0];
						d--;

					)
						a = a.lastChild;
					ke.merge(h, a.childNodes), ((a = p.firstChild).textContent = "");
				} else h.push(t.createTextNode(s));
		for (p.textContent = "", f = 0; (s = h[f++]); )
			if (o && ke.inArray(s, o) > -1) r && r.push(s);
			else if (
				((u = ke.contains(s.ownerDocument, s)),
				(a = k(p.appendChild(s), "script")),
				u && x(a),
				n)
			)
				for (d = 0; (s = a[d++]); ) Ge.test(s.type || "") && n.push(s);
		return p;
	}
	function S() {
		return !0;
	}
	function C() {
		return !1;
	}
	function $() {
		try {
			return se.activeElement;
		} catch (e) {}
	}
	function A(e, t, n, i, o, r) {
		var s, a;
		if ("object" == typeof t) {
			for (a in ("string" != typeof n && ((i = i || n), (n = void 0)), t))
				A(e, a, n, i, t[a], r);
			return e;
		}
		if (
			(null == i && null == o
				? ((o = n), (i = n = void 0))
				: null == o &&
				  ("string" == typeof n
						? ((o = i), (i = void 0))
						: ((o = i), (i = n), (n = void 0))),
			!1 === o)
		)
			o = C;
		else if (!o) return e;
		return (
			1 === r &&
				((s = o),
				((o = function (e) {
					return ke().off(e), s.apply(this, arguments);
				}).guid = s.guid || (s.guid = ke.guid++))),
			e.each(function () {
				ke.event.add(this, t, o, i, n);
			})
		);
	}
	function _(e, t) {
		return (
			(r(e, "table") &&
				r(11 !== t.nodeType ? t : t.firstChild, "tr") &&
				ke(e).children("tbody")[0]) ||
			e
		);
	}
	function E(e) {
		return (e.type = (null !== e.getAttribute("type")) + "/" + e.type), e;
	}
	function D(e) {
		return (
			"true/" === (e.type || "").slice(0, 5)
				? (e.type = e.type.slice(5))
				: e.removeAttribute("type"),
			e
		);
	}
	function j(e, t) {
		var n, i, o, r, s, a, l, c;
		if (1 === t.nodeType) {
			if (
				Pe.hasData(e) &&
				((r = Pe.access(e)), (s = Pe.set(t, r)), (c = r.events))
			)
				for (o in (delete s.handle, (s.events = {}), c))
					for (n = 0, i = c[o].length; n < i; n++) ke.event.add(t, o, c[o][n]);
			Me.hasData(e) &&
				((a = Me.access(e)), (l = ke.extend({}, a)), Me.set(t, l));
		}
	}
	function L(e, t) {
		var n = t.nodeName.toLowerCase();
		"input" === n && Xe.test(e.type)
			? (t.checked = e.checked)
			: ("input" !== n && "textarea" !== n) ||
			  (t.defaultValue = e.defaultValue);
	}
	function q(e, t, i, o) {
		t = ce.apply([], t);
		var r,
			s,
			a,
			l,
			c,
			u,
			d = 0,
			p = e.length,
			h = p - 1,
			f = t[0],
			g = me(f);
		if (g || (p > 1 && "string" == typeof f && !ye.checkClone && st.test(f)))
			return e.each(function (n) {
				var r = e.eq(n);
				g && (t[0] = f.call(this, n, r.html())), q(r, t, i, o);
			});
		if (
			p &&
			((s = (r = T(t, e[0].ownerDocument, !1, e, o)).firstChild),
			1 === r.childNodes.length && (r = s),
			s || o)
		) {
			for (l = (a = ke.map(k(r, "script"), E)).length; d < p; d++)
				(c = r),
					d !== h &&
						((c = ke.clone(c, !0, !0)), l && ke.merge(a, k(c, "script"))),
					i.call(e[d], c, d);
			if (l)
				for (u = a[a.length - 1].ownerDocument, ke.map(a, D), d = 0; d < l; d++)
					(c = a[d]),
						Ge.test(c.type || "") &&
							!Pe.access(c, "globalEval") &&
							ke.contains(u, c) &&
							(c.src && "module" !== (c.type || "").toLowerCase()
								? ke._evalUrl && ke._evalUrl(c.src)
								: n(c.textContent.replace(at, ""), u, c));
		}
		return e;
	}
	function O(e, t, n) {
		for (var i, o = t ? ke.filter(t, e) : e, r = 0; null != (i = o[r]); r++)
			n || 1 !== i.nodeType || ke.cleanData(k(i)),
				i.parentNode &&
					(n && ke.contains(i.ownerDocument, i) && x(k(i, "script")),
					i.parentNode.removeChild(i));
		return e;
	}
	function H(e, t, n) {
		var i,
			o,
			r,
			s,
			a = e.style;
		return (
			(n = n || ct(e)) &&
				("" !== (s = n.getPropertyValue(t) || n[t]) ||
					ke.contains(e.ownerDocument, e) ||
					(s = ke.style(e, t)),
				!ye.pixelBoxStyles() &&
					lt.test(s) &&
					ut.test(t) &&
					((i = a.width),
					(o = a.minWidth),
					(r = a.maxWidth),
					(a.minWidth = a.maxWidth = a.width = s),
					(s = n.width),
					(a.width = i),
					(a.minWidth = o),
					(a.maxWidth = r))),
			void 0 !== s ? s + "" : s
		);
	}
	function N(e, t) {
		return {
			get: function () {
				if (!e()) return (this.get = t).apply(this, arguments);
				delete this.get;
			},
		};
	}
	function z(e) {
		if (e in vt) return e;
		for (var t = e[0].toUpperCase() + e.slice(1), n = gt.length; n--; )
			if ((e = gt[n] + t) in vt) return e;
	}
	function I(e) {
		var t = ke.cssProps[e];
		return t || (t = ke.cssProps[e] = z(e) || e), t;
	}
	function P(e, t, n) {
		var i = We.exec(t);
		return i ? Math.max(0, i[2] - (n || 0)) + (i[3] || "px") : t;
	}
	function M(e, t, n, i, o, r) {
		var s = "width" === t ? 1 : 0,
			a = 0,
			l = 0;
		if (n === (i ? "border" : "content")) return 0;
		for (; s < 4; s += 2)
			"margin" === n && (l += ke.css(e, n + Ue[s], !0, o)),
				i
					? ("content" === n && (l -= ke.css(e, "padding" + Ue[s], !0, o)),
					  "margin" !== n &&
							(l -= ke.css(e, "border" + Ue[s] + "Width", !0, o)))
					: ((l += ke.css(e, "padding" + Ue[s], !0, o)),
					  "padding" !== n
							? (l += ke.css(e, "border" + Ue[s] + "Width", !0, o))
							: (a += ke.css(e, "border" + Ue[s] + "Width", !0, o)));
		return (
			!i &&
				r >= 0 &&
				(l += Math.max(
					0,
					Math.ceil(
						e["offset" + t[0].toUpperCase() + t.slice(1)] - r - l - a - 0.5
					)
				)),
			l
		);
	}
	function B(e, t, n) {
		var i = ct(e),
			o = H(e, t, i),
			r = "border-box" === ke.css(e, "boxSizing", !1, i),
			s = r;
		if (lt.test(o)) {
			if (!n) return o;
			o = "auto";
		}
		return (
			(s = s && (ye.boxSizingReliable() || o === e.style[t])),
			("auto" === o ||
				(!parseFloat(o) && "inline" === ke.css(e, "display", !1, i))) &&
				((o = e["offset" + t[0].toUpperCase() + t.slice(1)]), (s = !0)),
			(o = parseFloat(o) || 0) +
				M(e, t, n || (r ? "border" : "content"), s, i, o) +
				"px"
		);
	}
	function R(e, t, n, i, o) {
		return new R.prototype.init(e, t, n, i, o);
	}
	function F() {
		mt &&
			(!1 === se.hidden && e.requestAnimationFrame
				? e.requestAnimationFrame(F)
				: e.setTimeout(F, ke.fx.interval),
			ke.fx.tick());
	}
	function W() {
		return (
			e.setTimeout(function () {
				yt = void 0;
			}),
			(yt = Date.now())
		);
	}
	function U(e, t) {
		var n,
			i = 0,
			o = { height: e };
		for (t = t ? 1 : 0; i < 4; i += 2 - t)
			o["margin" + (n = Ue[i])] = o["padding" + n] = e;
		return t && (o.opacity = o.width = e), o;
	}
	function K(e, t, n) {
		for (
			var i,
				o = (X.tweeners[t] || []).concat(X.tweeners["*"]),
				r = 0,
				s = o.length;
			r < s;
			r++
		)
			if ((i = o[r].call(n, t, e))) return i;
	}
	function Q(e, t, n) {
		var i,
			o,
			r,
			s,
			a,
			l,
			c,
			u,
			d = "width" in t || "height" in t,
			p = this,
			h = {},
			f = e.style,
			g = e.nodeType && Ke(e),
			v = Pe.get(e, "fxshow");
		for (i in (n.queue ||
			(null == (s = ke._queueHooks(e, "fx")).unqueued &&
				((s.unqueued = 0),
				(a = s.empty.fire),
				(s.empty.fire = function () {
					s.unqueued || a();
				})),
			s.unqueued++,
			p.always(function () {
				p.always(function () {
					s.unqueued--, ke.queue(e, "fx").length || s.empty.fire();
				});
			})),
		t))
			if (((o = t[i]), bt.test(o))) {
				if (
					(delete t[i], (r = r || "toggle" === o), o === (g ? "hide" : "show"))
				) {
					if ("show" !== o || !v || void 0 === v[i]) continue;
					g = !0;
				}
				h[i] = (v && v[i]) || ke.style(e, i);
			}
		if ((l = !ke.isEmptyObject(t)) || !ke.isEmptyObject(h))
			for (i in (d &&
				1 === e.nodeType &&
				((n.overflow = [f.overflow, f.overflowX, f.overflowY]),
				null == (c = v && v.display) && (c = Pe.get(e, "display")),
				"none" === (u = ke.css(e, "display")) &&
					(c
						? (u = c)
						: (w([e], !0),
						  (c = e.style.display || c),
						  (u = ke.css(e, "display")),
						  w([e]))),
				("inline" === u || ("inline-block" === u && null != c)) &&
					"none" === ke.css(e, "float") &&
					(l ||
						(p.done(function () {
							f.display = c;
						}),
						null == c && ((u = f.display), (c = "none" === u ? "" : u))),
					(f.display = "inline-block"))),
			n.overflow &&
				((f.overflow = "hidden"),
				p.always(function () {
					(f.overflow = n.overflow[0]),
						(f.overflowX = n.overflow[1]),
						(f.overflowY = n.overflow[2]);
				})),
			(l = !1),
			h))
				l ||
					(v
						? "hidden" in v && (g = v.hidden)
						: (v = Pe.access(e, "fxshow", { display: c })),
					r && (v.hidden = !g),
					g && w([e], !0),
					p.done(function () {
						for (i in (g || w([e]), Pe.remove(e, "fxshow"), h))
							ke.style(e, i, h[i]);
					})),
					(l = K(g ? v[i] : 0, i, p)),
					i in v || ((v[i] = l.start), g && ((l.end = l.start), (l.start = 0)));
	}
	function V(e, t) {
		var n, i, o, r, s;
		for (n in e)
			if (
				((o = t[(i = f(n))]),
				(r = e[n]),
				Array.isArray(r) && ((o = r[1]), (r = e[n] = r[0])),
				n !== i && ((e[i] = r), delete e[n]),
				(s = ke.cssHooks[i]) && "expand" in s)
			)
				for (n in ((r = s.expand(r)), delete e[i], r))
					n in e || ((e[n] = r[n]), (t[n] = o));
			else t[i] = o;
	}
	function X(e, t, n) {
		var i,
			o,
			r = 0,
			s = X.prefilters.length,
			a = ke.Deferred().always(function () {
				delete l.elem;
			}),
			l = function () {
				if (o) return !1;
				for (
					var t = yt || W(),
						n = Math.max(0, c.startTime + c.duration - t),
						i = 1 - (n / c.duration || 0),
						r = 0,
						s = c.tweens.length;
					r < s;
					r++
				)
					c.tweens[r].run(i);
				return (
					a.notifyWith(e, [c, i, n]),
					i < 1 && s
						? n
						: (s || a.notifyWith(e, [c, 1, 0]), a.resolveWith(e, [c]), !1)
				);
			},
			c = a.promise({
				elem: e,
				props: ke.extend({}, t),
				opts: ke.extend(
					!0,
					{ specialEasing: {}, easing: ke.easing._default },
					n
				),
				originalProperties: t,
				originalOptions: n,
				startTime: yt || W(),
				duration: n.duration,
				tweens: [],
				createTween: function (t, n) {
					var i = ke.Tween(
						e,
						c.opts,
						t,
						n,
						c.opts.specialEasing[t] || c.opts.easing
					);
					return c.tweens.push(i), i;
				},
				stop: function (t) {
					var n = 0,
						i = t ? c.tweens.length : 0;
					if (o) return this;
					for (o = !0; n < i; n++) c.tweens[n].run(1);
					return (
						t
							? (a.notifyWith(e, [c, 1, 0]), a.resolveWith(e, [c, t]))
							: a.rejectWith(e, [c, t]),
						this
					);
				},
			}),
			u = c.props;
		for (V(u, c.opts.specialEasing); r < s; r++)
			if ((i = X.prefilters[r].call(c, e, u, c.opts)))
				return (
					me(i.stop) &&
						(ke._queueHooks(c.elem, c.opts.queue).stop = i.stop.bind(i)),
					i
				);
		return (
			ke.map(u, K, c),
			me(c.opts.start) && c.opts.start.call(e, c),
			c
				.progress(c.opts.progress)
				.done(c.opts.done, c.opts.complete)
				.fail(c.opts.fail)
				.always(c.opts.always),
			ke.fx.timer(ke.extend(l, { elem: e, anim: c, queue: c.opts.queue })),
			c
		);
	}
	function Y(e) {
		return (e.match(Le) || []).join(" ");
	}
	function G(e) {
		return (e.getAttribute && e.getAttribute("class")) || "";
	}
	function J(e) {
		return Array.isArray(e) ? e : ("string" == typeof e && e.match(Le)) || [];
	}
	function Z(e, t, n, o) {
		var r;
		if (Array.isArray(t))
			ke.each(t, function (t, i) {
				n || jt.test(e)
					? o(e, i)
					: Z(
							e + "[" + ("object" == typeof i && null != i ? t : "") + "]",
							i,
							n,
							o
					  );
			});
		else if (n || "object" !== i(t)) o(e, t);
		else for (r in t) Z(e + "[" + r + "]", t[r], n, o);
	}
	function ee(e) {
		return function (t, n) {
			"string" != typeof t && ((n = t), (t = "*"));
			var i,
				o = 0,
				r = t.toLowerCase().match(Le) || [];
			if (me(n))
				for (; (i = r[o++]); )
					"+" === i[0]
						? ((i = i.slice(1) || "*"), (e[i] = e[i] || []).unshift(n))
						: (e[i] = e[i] || []).push(n);
		};
	}
	function te(e, t, n, i) {
		function o(a) {
			var l;
			return (
				(r[a] = !0),
				ke.each(e[a] || [], function (e, a) {
					var c = a(t, n, i);
					return "string" != typeof c || s || r[c]
						? s
							? !(l = c)
							: void 0
						: (t.dataTypes.unshift(c), o(c), !1);
				}),
				l
			);
		}
		var r = {},
			s = e === Ft;
		return o(t.dataTypes[0]) || (!r["*"] && o("*"));
	}
	function ne(e, t) {
		var n,
			i,
			o = ke.ajaxSettings.flatOptions || {};
		for (n in t) void 0 !== t[n] && ((o[n] ? e : i || (i = {}))[n] = t[n]);
		return i && ke.extend(!0, e, i), e;
	}
	function ie(e, t, n) {
		for (var i, o, r, s, a = e.contents, l = e.dataTypes; "*" === l[0]; )
			l.shift(),
				void 0 === i && (i = e.mimeType || t.getResponseHeader("Content-Type"));
		if (i)
			for (o in a)
				if (a[o] && a[o].test(i)) {
					l.unshift(o);
					break;
				}
		if (l[0] in n) r = l[0];
		else {
			for (o in n) {
				if (!l[0] || e.converters[o + " " + l[0]]) {
					r = o;
					break;
				}
				s || (s = o);
			}
			r = r || s;
		}
		if (r) return r !== l[0] && l.unshift(r), n[r];
	}
	function oe(e, t, n, i) {
		var o,
			r,
			s,
			a,
			l,
			c = {},
			u = e.dataTypes.slice();
		if (u[1]) for (s in e.converters) c[s.toLowerCase()] = e.converters[s];
		for (r = u.shift(); r; )
			if (
				(e.responseFields[r] && (n[e.responseFields[r]] = t),
				!l && i && e.dataFilter && (t = e.dataFilter(t, e.dataType)),
				(l = r),
				(r = u.shift()))
			)
				if ("*" === r) r = l;
				else if ("*" !== l && l !== r) {
					if (!(s = c[l + " " + r] || c["* " + r]))
						for (o in c)
							if (
								(a = o.split(" "))[1] === r &&
								(s = c[l + " " + a[0]] || c["* " + a[0]])
							) {
								!0 === s
									? (s = c[o])
									: !0 !== c[o] && ((r = a[0]), u.unshift(a[1]));
								break;
							}
					if (!0 !== s)
						if (s && e.throws) t = s(t);
						else
							try {
								t = s(t);
							} catch (e) {
								return {
									state: "parsererror",
									error: s ? e : "No conversion from " + l + " to " + r,
								};
							}
				}
		return { state: "success", data: t };
	}
	var re = [],
		se = e.document,
		ae = Object.getPrototypeOf,
		le = re.slice,
		ce = re.concat,
		ue = re.push,
		de = re.indexOf,
		pe = {},
		he = pe.toString,
		fe = pe.hasOwnProperty,
		ge = fe.toString,
		ve = ge.call(Object),
		ye = {},
		me = function (e) {
			return "function" == typeof e && "number" != typeof e.nodeType;
		},
		be = function (e) {
			return null != e && e === e.window;
		},
		we = { type: !0, src: !0, noModule: !0 },
		ke = function (e, t) {
			return new ke.fn.init(e, t);
		},
		xe = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
	(ke.fn = ke.prototype = {
		jquery: "3.3.1",
		constructor: ke,
		length: 0,
		toArray: function () {
			return le.call(this);
		},
		get: function (e) {
			return null == e
				? le.call(this)
				: e < 0
				? this[e + this.length]
				: this[e];
		},
		pushStack: function (e) {
			var t = ke.merge(this.constructor(), e);
			return (t.prevObject = this), t;
		},
		each: function (e) {
			return ke.each(this, e);
		},
		map: function (e) {
			return this.pushStack(
				ke.map(this, function (t, n) {
					return e.call(t, n, t);
				})
			);
		},
		slice: function () {
			return this.pushStack(le.apply(this, arguments));
		},
		first: function () {
			return this.eq(0);
		},
		last: function () {
			return this.eq(-1);
		},
		eq: function (e) {
			var t = this.length,
				n = +e + (e < 0 ? t : 0);
			return this.pushStack(n >= 0 && n < t ? [this[n]] : []);
		},
		end: function () {
			return this.prevObject || this.constructor();
		},
		push: ue,
		sort: re.sort,
		splice: re.splice,
	}),
		(ke.extend = ke.fn.extend = function () {
			var e,
				t,
				n,
				i,
				o,
				r,
				s = arguments[0] || {},
				a = 1,
				l = arguments.length,
				c = !1;
			for (
				"boolean" == typeof s && ((c = s), (s = arguments[a] || {}), a++),
					"object" == typeof s || me(s) || (s = {}),
					a === l && ((s = this), a--);
				a < l;
				a++
			)
				if (null != (e = arguments[a]))
					for (t in e)
						(n = s[t]),
							s !== (i = e[t]) &&
								(c && i && (ke.isPlainObject(i) || (o = Array.isArray(i)))
									? (o
											? ((o = !1), (r = n && Array.isArray(n) ? n : []))
											: (r = n && ke.isPlainObject(n) ? n : {}),
									  (s[t] = ke.extend(c, r, i)))
									: void 0 !== i && (s[t] = i));
			return s;
		}),
		ke.extend({
			expando: "jQuery" + ("3.3.1" + Math.random()).replace(/\D/g, ""),
			isReady: !0,
			error: function (e) {
				throw new Error(e);
			},
			noop: function () {},
			isPlainObject: function (e) {
				var t, n;
				return !(
					!e ||
					"[object Object]" !== he.call(e) ||
					((t = ae(e)) &&
						("function" !=
							typeof (n = fe.call(t, "constructor") && t.constructor) ||
							ge.call(n) !== ve))
				);
			},
			isEmptyObject: function (e) {
				var t;
				for (t in e) return !1;
				return !0;
			},
			globalEval: function (e) {
				n(e);
			},
			each: function (e, t) {
				var n,
					i = 0;
				if (o(e))
					for (n = e.length; i < n && !1 !== t.call(e[i], i, e[i]); i++);
				else for (i in e) if (!1 === t.call(e[i], i, e[i])) break;
				return e;
			},
			trim: function (e) {
				return null == e ? "" : (e + "").replace(xe, "");
			},
			makeArray: function (e, t) {
				var n = t || [];
				return (
					null != e &&
						(o(Object(e))
							? ke.merge(n, "string" == typeof e ? [e] : e)
							: ue.call(n, e)),
					n
				);
			},
			inArray: function (e, t, n) {
				return null == t ? -1 : de.call(t, e, n);
			},
			merge: function (e, t) {
				for (var n = +t.length, i = 0, o = e.length; i < n; i++) e[o++] = t[i];
				return (e.length = o), e;
			},
			grep: function (e, t, n) {
				for (var i = [], o = 0, r = e.length, s = !n; o < r; o++)
					!t(e[o], o) !== s && i.push(e[o]);
				return i;
			},
			map: function (e, t, n) {
				var i,
					r,
					s = 0,
					a = [];
				if (o(e))
					for (i = e.length; s < i; s++)
						null != (r = t(e[s], s, n)) && a.push(r);
				else for (s in e) null != (r = t(e[s], s, n)) && a.push(r);
				return ce.apply([], a);
			},
			guid: 1,
			support: ye,
		}),
		"function" == typeof Symbol &&
			(ke.fn[Symbol.iterator] = re[Symbol.iterator]),
		ke.each(
			"Boolean Number String Function Array Date RegExp Object Error Symbol".split(
				" "
			),
			function (e, t) {
				pe["[object " + t + "]"] = t.toLowerCase();
			}
		);
	var Te = (function (e) {
		function t(e, t, n, i) {
			var o,
				r,
				s,
				a,
				l,
				c,
				u,
				p = t && t.ownerDocument,
				f = t ? t.nodeType : 9;
			if (
				((n = n || []),
				"string" != typeof e || !e || (1 !== f && 9 !== f && 11 !== f))
			)
				return n;
			if (
				!i &&
				((t ? t.ownerDocument || t : B) !== q && L(t), (t = t || q), H)
			) {
				if (11 !== f && (l = ye.exec(e)))
					if ((o = l[1])) {
						if (9 === f) {
							if (!(s = t.getElementById(o))) return n;
							if (s.id === o) return n.push(s), n;
						} else if (p && (s = p.getElementById(o)) && P(t, s) && s.id === o)
							return n.push(s), n;
					} else {
						if (l[2]) return J.apply(n, t.getElementsByTagName(e)), n;
						if (
							(o = l[3]) &&
							x.getElementsByClassName &&
							t.getElementsByClassName
						)
							return J.apply(n, t.getElementsByClassName(o)), n;
					}
				if (x.qsa && !K[e + " "] && (!N || !N.test(e))) {
					if (1 !== f) (p = t), (u = e);
					else if ("object" !== t.nodeName.toLowerCase()) {
						for (
							(a = t.getAttribute("id"))
								? (a = a.replace(ke, xe))
								: t.setAttribute("id", (a = M)),
								r = (c = $(e)).length;
							r--;

						)
							c[r] = "#" + a + " " + h(c[r]);
						(u = c.join(",")), (p = (me.test(e) && d(t.parentNode)) || t);
					}
					if (u)
						try {
							return J.apply(n, p.querySelectorAll(u)), n;
						} catch (e) {
						} finally {
							a === M && t.removeAttribute("id");
						}
				}
			}
			return _(e.replace(ae, "$1"), t, n, i);
		}
		function n() {
			function e(n, i) {
				return (
					t.push(n + " ") > T.cacheLength && delete e[t.shift()],
					(e[n + " "] = i)
				);
			}
			var t = [];
			return e;
		}
		function i(e) {
			return (e[M] = !0), e;
		}
		function o(e) {
			var t = q.createElement("fieldset");
			try {
				return !!e(t);
			} catch (e) {
				return !1;
			} finally {
				t.parentNode && t.parentNode.removeChild(t), (t = null);
			}
		}
		function r(e, t) {
			for (var n = e.split("|"), i = n.length; i--; ) T.attrHandle[n[i]] = t;
		}
		function s(e, t) {
			var n = t && e,
				i =
					n &&
					1 === e.nodeType &&
					1 === t.nodeType &&
					e.sourceIndex - t.sourceIndex;
			if (i) return i;
			if (n) for (; (n = n.nextSibling); ) if (n === t) return -1;
			return e ? 1 : -1;
		}
		function a(e) {
			return function (t) {
				return "input" === t.nodeName.toLowerCase() && t.type === e;
			};
		}
		function l(e) {
			return function (t) {
				var n = t.nodeName.toLowerCase();
				return ("input" === n || "button" === n) && t.type === e;
			};
		}
		function c(e) {
			return function (t) {
				return "form" in t
					? t.parentNode && !1 === t.disabled
						? "label" in t
							? "label" in t.parentNode
								? t.parentNode.disabled === e
								: t.disabled === e
							: t.isDisabled === e || (t.isDisabled !== !e && Se(t) === e)
						: t.disabled === e
					: "label" in t && t.disabled === e;
			};
		}
		function u(e) {
			return i(function (t) {
				return (
					(t = +t),
					i(function (n, i) {
						for (var o, r = e([], n.length, t), s = r.length; s--; )
							n[(o = r[s])] && (n[o] = !(i[o] = n[o]));
					})
				);
			});
		}
		function d(e) {
			return e && "undefined" != typeof e.getElementsByTagName && e;
		}
		function p() {}
		function h(e) {
			for (var t = 0, n = e.length, i = ""; t < n; t++) i += e[t].value;
			return i;
		}
		function f(e, t, n) {
			var i = t.dir,
				o = t.next,
				r = o || i,
				s = n && "parentNode" === r,
				a = F++;
			return t.first
				? function (t, n, o) {
						for (; (t = t[i]); ) if (1 === t.nodeType || s) return e(t, n, o);
						return !1;
				  }
				: function (t, n, l) {
						var c,
							u,
							d,
							p = [R, a];
						if (l) {
							for (; (t = t[i]); )
								if ((1 === t.nodeType || s) && e(t, n, l)) return !0;
						} else
							for (; (t = t[i]); )
								if (1 === t.nodeType || s)
									if (
										((u =
											(d = t[M] || (t[M] = {}))[t.uniqueID] ||
											(d[t.uniqueID] = {})),
										o && o === t.nodeName.toLowerCase())
									)
										t = t[i] || t;
									else {
										if ((c = u[r]) && c[0] === R && c[1] === a)
											return (p[2] = c[2]);
										if (((u[r] = p), (p[2] = e(t, n, l)))) return !0;
									}
						return !1;
				  };
		}
		function g(e) {
			return e.length > 1
				? function (t, n, i) {
						for (var o = e.length; o--; ) if (!e[o](t, n, i)) return !1;
						return !0;
				  }
				: e[0];
		}
		function v(e, n, i) {
			for (var o = 0, r = n.length; o < r; o++) t(e, n[o], i);
			return i;
		}
		function y(e, t, n, i, o) {
			for (var r, s = [], a = 0, l = e.length, c = null != t; a < l; a++)
				(r = e[a]) && ((n && !n(r, i, o)) || (s.push(r), c && t.push(a)));
			return s;
		}
		function m(e, t, n, o, r, s) {
			return (
				o && !o[M] && (o = m(o)),
				r && !r[M] && (r = m(r, s)),
				i(function (i, s, a, l) {
					var c,
						u,
						d,
						p = [],
						h = [],
						f = s.length,
						g = i || v(t || "*", a.nodeType ? [a] : a, []),
						m = !e || (!i && t) ? g : y(g, p, e, a, l),
						b = n ? (r || (i ? e : f || o) ? [] : s) : m;
					if ((n && n(m, b, a, l), o))
						for (c = y(b, h), o(c, [], a, l), u = c.length; u--; )
							(d = c[u]) && (b[h[u]] = !(m[h[u]] = d));
					if (i) {
						if (r || e) {
							if (r) {
								for (c = [], u = b.length; u--; )
									(d = b[u]) && c.push((m[u] = d));
								r(null, (b = []), c, l);
							}
							for (u = b.length; u--; )
								(d = b[u]) &&
									(c = r ? ee(i, d) : p[u]) > -1 &&
									(i[c] = !(s[c] = d));
						}
					} else (b = y(b === s ? b.splice(f, b.length) : b)), r ? r(null, s, b, l) : J.apply(s, b);
				})
			);
		}
		function b(e) {
			for (
				var t,
					n,
					i,
					o = e.length,
					r = T.relative[e[0].type],
					s = r || T.relative[" "],
					a = r ? 1 : 0,
					l = f(
						function (e) {
							return e === t;
						},
						s,
						!0
					),
					c = f(
						function (e) {
							return ee(t, e) > -1;
						},
						s,
						!0
					),
					u = [
						function (e, n, i) {
							var o =
								(!r && (i || n !== E)) ||
								((t = n).nodeType ? l(e, n, i) : c(e, n, i));
							return (t = null), o;
						},
					];
				a < o;
				a++
			)
				if ((n = T.relative[e[a].type])) u = [f(g(u), n)];
				else {
					if ((n = T.filter[e[a].type].apply(null, e[a].matches))[M]) {
						for (i = ++a; i < o && !T.relative[e[i].type]; i++);
						return m(
							a > 1 && g(u),
							a > 1 &&
								h(
									e
										.slice(0, a - 1)
										.concat({ value: " " === e[a - 2].type ? "*" : "" })
								).replace(ae, "$1"),
							n,
							a < i && b(e.slice(a, i)),
							i < o && b((e = e.slice(i))),
							i < o && h(e)
						);
					}
					u.push(n);
				}
			return g(u);
		}
		function w(e, n) {
			var o = n.length > 0,
				r = e.length > 0,
				s = function (i, s, a, l, c) {
					var u,
						d,
						p,
						h = 0,
						f = "0",
						g = i && [],
						v = [],
						m = E,
						b = i || (r && T.find.TAG("*", c)),
						w = (R += null == m ? 1 : Math.random() || 0.1),
						k = b.length;
					for (
						c && (E = s === q || s || c);
						f !== k && null != (u = b[f]);
						f++
					) {
						if (r && u) {
							for (
								d = 0, s || u.ownerDocument === q || (L(u), (a = !H));
								(p = e[d++]);

							)
								if (p(u, s || q, a)) {
									l.push(u);
									break;
								}
							c && (R = w);
						}
						o && ((u = !p && u) && h--, i && g.push(u));
					}
					if (((h += f), o && f !== h)) {
						for (d = 0; (p = n[d++]); ) p(g, v, s, a);
						if (i) {
							if (h > 0) for (; f--; ) g[f] || v[f] || (v[f] = Y.call(l));
							v = y(v);
						}
						J.apply(l, v),
							c && !i && v.length > 0 && h + n.length > 1 && t.uniqueSort(l);
					}
					return c && ((R = w), (E = m)), g;
				};
			return o ? i(s) : s;
		}
		var k,
			x,
			T,
			S,
			C,
			$,
			A,
			_,
			E,
			D,
			j,
			L,
			q,
			O,
			H,
			N,
			z,
			I,
			P,
			M = "sizzle" + 1 * new Date(),
			B = e.document,
			R = 0,
			F = 0,
			W = n(),
			U = n(),
			K = n(),
			Q = function (e, t) {
				return e === t && (j = !0), 0;
			},
			V = {}.hasOwnProperty,
			X = [],
			Y = X.pop,
			G = X.push,
			J = X.push,
			Z = X.slice,
			ee = function (e, t) {
				for (var n = 0, i = e.length; n < i; n++) if (e[n] === t) return n;
				return -1;
			},
			te =
				"checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
			ne = "[\\x20\\t\\r\\n\\f]",
			ie = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
			oe =
				"\\[" +
				ne +
				"*(" +
				ie +
				")(?:" +
				ne +
				"*([*^$|!~]?=)" +
				ne +
				"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" +
				ie +
				"))|)" +
				ne +
				"*\\]",
			re =
				":(" +
				ie +
				")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" +
				oe +
				")*)|.*)\\)|)",
			se = new RegExp(ne + "+", "g"),
			ae = new RegExp(
				"^" + ne + "+|((?:^|[^\\\\])(?:\\\\.)*)" + ne + "+$",
				"g"
			),
			le = new RegExp("^" + ne + "*," + ne + "*"),
			ce = new RegExp("^" + ne + "*([>+~]|" + ne + ")" + ne + "*"),
			ue = new RegExp("=" + ne + "*([^\\]'\"]*?)" + ne + "*\\]", "g"),
			de = new RegExp(re),
			pe = new RegExp("^" + ie + "$"),
			he = {
				ID: new RegExp("^#(" + ie + ")"),
				CLASS: new RegExp("^\\.(" + ie + ")"),
				TAG: new RegExp("^(" + ie + "|[*])"),
				ATTR: new RegExp("^" + oe),
				PSEUDO: new RegExp("^" + re),
				CHILD: new RegExp(
					"^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" +
						ne +
						"*(even|odd|(([+-]|)(\\d*)n|)" +
						ne +
						"*(?:([+-]|)" +
						ne +
						"*(\\d+)|))" +
						ne +
						"*\\)|)",
					"i"
				),
				bool: new RegExp("^(?:" + te + ")$", "i"),
				needsContext: new RegExp(
					"^" +
						ne +
						"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" +
						ne +
						"*((?:-\\d)?\\d*)" +
						ne +
						"*\\)|)(?=[^-]|$)",
					"i"
				),
			},
			fe = /^(?:input|select|textarea|button)$/i,
			ge = /^h\d$/i,
			ve = /^[^{]+\{\s*\[native \w/,
			ye = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
			me = /[+~]/,
			be = new RegExp("\\\\([\\da-f]{1,6}" + ne + "?|(" + ne + ")|.)", "ig"),
			we = function (e, t, n) {
				var i = "0x" + t - 65536;
				return i != i || n
					? t
					: i < 0
					? String.fromCharCode(i + 65536)
					: String.fromCharCode((i >> 10) | 55296, (1023 & i) | 56320);
			},
			ke = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
			xe = function (e, t) {
				return t
					? "\0" === e
						? "\ufffd"
						: e.slice(0, -1) +
						  "\\" +
						  e.charCodeAt(e.length - 1).toString(16) +
						  " "
					: "\\" + e;
			},
			Te = function () {
				L();
			},
			Se = f(
				function (e) {
					return !0 === e.disabled && ("form" in e || "label" in e);
				},
				{ dir: "parentNode", next: "legend" }
			);
		try {
			J.apply((X = Z.call(B.childNodes)), B.childNodes),
				X[B.childNodes.length].nodeType;
		} catch (e) {
			J = {
				apply: X.length
					? function (e, t) {
							G.apply(e, Z.call(t));
					  }
					: function (e, t) {
							for (var n = e.length, i = 0; (e[n++] = t[i++]); );
							e.length = n - 1;
					  },
			};
		}
		for (k in ((x = t.support = {}),
		(C = t.isXML = function (e) {
			var t = e && (e.ownerDocument || e).documentElement;
			return !!t && "HTML" !== t.nodeName;
		}),
		(L = t.setDocument = function (e) {
			var t,
				n,
				i = e ? e.ownerDocument || e : B;
			return i !== q && 9 === i.nodeType && i.documentElement
				? ((O = (q = i).documentElement),
				  (H = !C(q)),
				  B !== q &&
						(n = q.defaultView) &&
						n.top !== n &&
						(n.addEventListener
							? n.addEventListener("unload", Te, !1)
							: n.attachEvent && n.attachEvent("onunload", Te)),
				  (x.attributes = o(function (e) {
						return (e.className = "i"), !e.getAttribute("className");
				  })),
				  (x.getElementsByTagName = o(function (e) {
						return (
							e.appendChild(q.createComment("")),
							!e.getElementsByTagName("*").length
						);
				  })),
				  (x.getElementsByClassName = ve.test(q.getElementsByClassName)),
				  (x.getById = o(function (e) {
						return (
							(O.appendChild(e).id = M),
							!q.getElementsByName || !q.getElementsByName(M).length
						);
				  })),
				  x.getById
						? ((T.filter.ID = function (e) {
								var t = e.replace(be, we);
								return function (e) {
									return e.getAttribute("id") === t;
								};
						  }),
						  (T.find.ID = function (e, t) {
								if ("undefined" != typeof t.getElementById && H) {
									var n = t.getElementById(e);
									return n ? [n] : [];
								}
						  }))
						: ((T.filter.ID = function (e) {
								var t = e.replace(be, we);
								return function (e) {
									var n =
										"undefined" != typeof e.getAttributeNode &&
										e.getAttributeNode("id");
									return n && n.value === t;
								};
						  }),
						  (T.find.ID = function (e, t) {
								if ("undefined" != typeof t.getElementById && H) {
									var n,
										i,
										o,
										r = t.getElementById(e);
									if (r) {
										if ((n = r.getAttributeNode("id")) && n.value === e)
											return [r];
										for (o = t.getElementsByName(e), i = 0; (r = o[i++]); )
											if ((n = r.getAttributeNode("id")) && n.value === e)
												return [r];
									}
									return [];
								}
						  })),
				  (T.find.TAG = x.getElementsByTagName
						? function (e, t) {
								return "undefined" != typeof t.getElementsByTagName
									? t.getElementsByTagName(e)
									: x.qsa
									? t.querySelectorAll(e)
									: void 0;
						  }
						: function (e, t) {
								var n,
									i = [],
									o = 0,
									r = t.getElementsByTagName(e);
								if ("*" === e) {
									for (; (n = r[o++]); ) 1 === n.nodeType && i.push(n);
									return i;
								}
								return r;
						  }),
				  (T.find.CLASS =
						x.getElementsByClassName &&
						function (e, t) {
							if ("undefined" != typeof t.getElementsByClassName && H)
								return t.getElementsByClassName(e);
						}),
				  (z = []),
				  (N = []),
				  (x.qsa = ve.test(q.querySelectorAll)) &&
						(o(function (e) {
							(O.appendChild(e).innerHTML =
								"<a id='" +
								M +
								"'></a><select id='" +
								M +
								"-\r\\' msallowcapture=''><option selected=''></option></select>"),
								e.querySelectorAll("[msallowcapture^='']").length &&
									N.push("[*^$]=" + ne + "*(?:''|\"\")"),
								e.querySelectorAll("[selected]").length ||
									N.push("\\[" + ne + "*(?:value|" + te + ")"),
								e.querySelectorAll("[id~=" + M + "-]").length || N.push("~="),
								e.querySelectorAll(":checked").length || N.push(":checked"),
								e.querySelectorAll("a#" + M + "+*").length ||
									N.push(".#.+[+~]");
						}),
						o(function (e) {
							e.innerHTML =
								"<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
							var t = q.createElement("input");
							t.setAttribute("type", "hidden"),
								e.appendChild(t).setAttribute("name", "D"),
								e.querySelectorAll("[name=d]").length &&
									N.push("name" + ne + "*[*^$|!~]?="),
								2 !== e.querySelectorAll(":enabled").length &&
									N.push(":enabled", ":disabled"),
								(O.appendChild(e).disabled = !0),
								2 !== e.querySelectorAll(":disabled").length &&
									N.push(":enabled", ":disabled"),
								e.querySelectorAll("*,:x"),
								N.push(",.*:");
						})),
				  (x.matchesSelector = ve.test(
						(I =
							O.matches ||
							O.webkitMatchesSelector ||
							O.mozMatchesSelector ||
							O.oMatchesSelector ||
							O.msMatchesSelector)
				  )) &&
						o(function (e) {
							(x.disconnectedMatch = I.call(e, "*")),
								I.call(e, "[s!='']:x"),
								z.push("!=", re);
						}),
				  (N = N.length && new RegExp(N.join("|"))),
				  (z = z.length && new RegExp(z.join("|"))),
				  (t = ve.test(O.compareDocumentPosition)),
				  (P =
						t || ve.test(O.contains)
							? function (e, t) {
									var n = 9 === e.nodeType ? e.documentElement : e,
										i = t && t.parentNode;
									return (
										e === i ||
										!(
											!i ||
											1 !== i.nodeType ||
											!(n.contains
												? n.contains(i)
												: e.compareDocumentPosition &&
												  16 & e.compareDocumentPosition(i))
										)
									);
							  }
							: function (e, t) {
									if (t) for (; (t = t.parentNode); ) if (t === e) return !0;
									return !1;
							  }),
				  (Q = t
						? function (e, t) {
								if (e === t) return (j = !0), 0;
								var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
								return (
									n ||
									(1 &
										(n =
											(e.ownerDocument || e) === (t.ownerDocument || t)
												? e.compareDocumentPosition(t)
												: 1) ||
									(!x.sortDetached && t.compareDocumentPosition(e) === n)
										? e === q || (e.ownerDocument === B && P(B, e))
											? -1
											: t === q || (t.ownerDocument === B && P(B, t))
											? 1
											: D
											? ee(D, e) - ee(D, t)
											: 0
										: 4 & n
										? -1
										: 1)
								);
						  }
						: function (e, t) {
								if (e === t) return (j = !0), 0;
								var n,
									i = 0,
									o = e.parentNode,
									r = t.parentNode,
									a = [e],
									l = [t];
								if (!o || !r)
									return e === q
										? -1
										: t === q
										? 1
										: o
										? -1
										: r
										? 1
										: D
										? ee(D, e) - ee(D, t)
										: 0;
								if (o === r) return s(e, t);
								for (n = e; (n = n.parentNode); ) a.unshift(n);
								for (n = t; (n = n.parentNode); ) l.unshift(n);
								for (; a[i] === l[i]; ) i++;
								return i ? s(a[i], l[i]) : a[i] === B ? -1 : l[i] === B ? 1 : 0;
						  }),
				  q)
				: q;
		}),
		(t.matches = function (e, n) {
			return t(e, null, null, n);
		}),
		(t.matchesSelector = function (e, n) {
			if (
				((e.ownerDocument || e) !== q && L(e),
				(n = n.replace(ue, "='$1']")),
				x.matchesSelector &&
					H &&
					!K[n + " "] &&
					(!z || !z.test(n)) &&
					(!N || !N.test(n)))
			)
				try {
					var i = I.call(e, n);
					if (
						i ||
						x.disconnectedMatch ||
						(e.document && 11 !== e.document.nodeType)
					)
						return i;
				} catch (e) {}
			return t(n, q, null, [e]).length > 0;
		}),
		(t.contains = function (e, t) {
			return (e.ownerDocument || e) !== q && L(e), P(e, t);
		}),
		(t.attr = function (e, t) {
			(e.ownerDocument || e) !== q && L(e);
			var n = T.attrHandle[t.toLowerCase()],
				i = n && V.call(T.attrHandle, t.toLowerCase()) ? n(e, t, !H) : void 0;
			return void 0 !== i
				? i
				: x.attributes || !H
				? e.getAttribute(t)
				: (i = e.getAttributeNode(t)) && i.specified
				? i.value
				: null;
		}),
		(t.escape = function (e) {
			return (e + "").replace(ke, xe);
		}),
		(t.error = function (e) {
			throw new Error("Syntax error, unrecognized expression: " + e);
		}),
		(t.uniqueSort = function (e) {
			var t,
				n = [],
				i = 0,
				o = 0;
			if (
				((j = !x.detectDuplicates),
				(D = !x.sortStable && e.slice(0)),
				e.sort(Q),
				j)
			) {
				for (; (t = e[o++]); ) t === e[o] && (i = n.push(o));
				for (; i--; ) e.splice(n[i], 1);
			}
			return (D = null), e;
		}),
		(S = t.getText = function (e) {
			var t,
				n = "",
				i = 0,
				o = e.nodeType;
			if (o) {
				if (1 === o || 9 === o || 11 === o) {
					if ("string" == typeof e.textContent) return e.textContent;
					for (e = e.firstChild; e; e = e.nextSibling) n += S(e);
				} else if (3 === o || 4 === o) return e.nodeValue;
			} else for (; (t = e[i++]); ) n += S(t);
			return n;
		}),
		((T = t.selectors = {
			cacheLength: 50,
			createPseudo: i,
			match: he,
			attrHandle: {},
			find: {},
			relative: {
				">": { dir: "parentNode", first: !0 },
				" ": { dir: "parentNode" },
				"+": { dir: "previousSibling", first: !0 },
				"~": { dir: "previousSibling" },
			},
			preFilter: {
				ATTR: function (e) {
					return (
						(e[1] = e[1].replace(be, we)),
						(e[3] = (e[3] || e[4] || e[5] || "").replace(be, we)),
						"~=" === e[2] && (e[3] = " " + e[3] + " "),
						e.slice(0, 4)
					);
				},
				CHILD: function (e) {
					return (
						(e[1] = e[1].toLowerCase()),
						"nth" === e[1].slice(0, 3)
							? (e[3] || t.error(e[0]),
							  (e[4] = +(e[4]
									? e[5] + (e[6] || 1)
									: 2 * ("even" === e[3] || "odd" === e[3]))),
							  (e[5] = +(e[7] + e[8] || "odd" === e[3])))
							: e[3] && t.error(e[0]),
						e
					);
				},
				PSEUDO: function (e) {
					var t,
						n = !e[6] && e[2];
					return he.CHILD.test(e[0])
						? null
						: (e[3]
								? (e[2] = e[4] || e[5] || "")
								: n &&
								  de.test(n) &&
								  (t = $(n, !0)) &&
								  (t = n.indexOf(")", n.length - t) - n.length) &&
								  ((e[0] = e[0].slice(0, t)), (e[2] = n.slice(0, t))),
						  e.slice(0, 3));
				},
			},
			filter: {
				TAG: function (e) {
					var t = e.replace(be, we).toLowerCase();
					return "*" === e
						? function () {
								return !0;
						  }
						: function (e) {
								return e.nodeName && e.nodeName.toLowerCase() === t;
						  };
				},
				CLASS: function (e) {
					var t = W[e + " "];
					return (
						t ||
						((t = new RegExp("(^|" + ne + ")" + e + "(" + ne + "|$)")) &&
							W(e, function (e) {
								return t.test(
									("string" == typeof e.className && e.className) ||
										("undefined" != typeof e.getAttribute &&
											e.getAttribute("class")) ||
										""
								);
							}))
					);
				},
				ATTR: function (e, n, i) {
					return function (o) {
						var r = t.attr(o, e);
						return null == r
							? "!=" === n
							: !n ||
									((r += ""),
									"=" === n
										? r === i
										: "!=" === n
										? r !== i
										: "^=" === n
										? i && 0 === r.indexOf(i)
										: "*=" === n
										? i && r.indexOf(i) > -1
										: "$=" === n
										? i && r.slice(-i.length) === i
										: "~=" === n
										? (" " + r.replace(se, " ") + " ").indexOf(i) > -1
										: "|=" === n &&
										  (r === i || r.slice(0, i.length + 1) === i + "-"));
					};
				},
				CHILD: function (e, t, n, i, o) {
					var r = "nth" !== e.slice(0, 3),
						s = "last" !== e.slice(-4),
						a = "of-type" === t;
					return 1 === i && 0 === o
						? function (e) {
								return !!e.parentNode;
						  }
						: function (t, n, l) {
								var c,
									u,
									d,
									p,
									h,
									f,
									g = r !== s ? "nextSibling" : "previousSibling",
									v = t.parentNode,
									y = a && t.nodeName.toLowerCase(),
									m = !l && !a,
									b = !1;
								if (v) {
									if (r) {
										for (; g; ) {
											for (p = t; (p = p[g]); )
												if (
													a ? p.nodeName.toLowerCase() === y : 1 === p.nodeType
												)
													return !1;
											f = g = "only" === e && !f && "nextSibling";
										}
										return !0;
									}
									if (((f = [s ? v.firstChild : v.lastChild]), s && m)) {
										for (
											b =
												(h =
													(c =
														(u =
															(d = (p = v)[M] || (p[M] = {}))[p.uniqueID] ||
															(d[p.uniqueID] = {}))[e] || [])[0] === R &&
													c[1]) && c[2],
												p = h && v.childNodes[h];
											(p = (++h && p && p[g]) || (b = h = 0) || f.pop());

										)
											if (1 === p.nodeType && ++b && p === t) {
												u[e] = [R, h, b];
												break;
											}
									} else if (
										(m &&
											(b = h =
												(c =
													(u =
														(d = (p = t)[M] || (p[M] = {}))[p.uniqueID] ||
														(d[p.uniqueID] = {}))[e] || [])[0] === R && c[1]),
										!1 === b)
									)
										for (
											;
											(p = (++h && p && p[g]) || (b = h = 0) || f.pop()) &&
											((a
												? p.nodeName.toLowerCase() !== y
												: 1 !== p.nodeType) ||
												!++b ||
												(m &&
													((u =
														(d = p[M] || (p[M] = {}))[p.uniqueID] ||
														(d[p.uniqueID] = {}))[e] = [R, b]),
												p !== t));

										);
									return (b -= o) === i || (b % i == 0 && b / i >= 0);
								}
						  };
				},
				PSEUDO: function (e, n) {
					var o,
						r =
							T.pseudos[e] ||
							T.setFilters[e.toLowerCase()] ||
							t.error("unsupported pseudo: " + e);
					return r[M]
						? r(n)
						: r.length > 1
						? ((o = [e, e, "", n]),
						  T.setFilters.hasOwnProperty(e.toLowerCase())
								? i(function (e, t) {
										for (var i, o = r(e, n), s = o.length; s--; )
											e[(i = ee(e, o[s]))] = !(t[i] = o[s]);
								  })
								: function (e) {
										return r(e, 0, o);
								  })
						: r;
				},
			},
			pseudos: {
				not: i(function (e) {
					var t = [],
						n = [],
						o = A(e.replace(ae, "$1"));
					return o[M]
						? i(function (e, t, n, i) {
								for (var r, s = o(e, null, i, []), a = e.length; a--; )
									(r = s[a]) && (e[a] = !(t[a] = r));
						  })
						: function (e, i, r) {
								return (t[0] = e), o(t, null, r, n), (t[0] = null), !n.pop();
						  };
				}),
				has: i(function (e) {
					return function (n) {
						return t(e, n).length > 0;
					};
				}),
				contains: i(function (e) {
					return (
						(e = e.replace(be, we)),
						function (t) {
							return (t.textContent || t.innerText || S(t)).indexOf(e) > -1;
						}
					);
				}),
				lang: i(function (e) {
					return (
						pe.test(e || "") || t.error("unsupported lang: " + e),
						(e = e.replace(be, we).toLowerCase()),
						function (t) {
							var n;
							do {
								if (
									(n = H
										? t.lang
										: t.getAttribute("xml:lang") || t.getAttribute("lang"))
								)
									return (
										(n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-")
									);
							} while ((t = t.parentNode) && 1 === t.nodeType);
							return !1;
						}
					);
				}),
				target: function (t) {
					var n = e.location && e.location.hash;
					return n && n.slice(1) === t.id;
				},
				root: function (e) {
					return e === O;
				},
				focus: function (e) {
					return (
						e === q.activeElement &&
						(!q.hasFocus || q.hasFocus()) &&
						!!(e.type || e.href || ~e.tabIndex)
					);
				},
				enabled: c(!1),
				disabled: c(!0),
				checked: function (e) {
					var t = e.nodeName.toLowerCase();
					return (
						("input" === t && !!e.checked) || ("option" === t && !!e.selected)
					);
				},
				selected: function (e) {
					return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected;
				},
				empty: function (e) {
					for (e = e.firstChild; e; e = e.nextSibling)
						if (e.nodeType < 6) return !1;
					return !0;
				},
				parent: function (e) {
					return !T.pseudos.empty(e);
				},
				header: function (e) {
					return ge.test(e.nodeName);
				},
				input: function (e) {
					return fe.test(e.nodeName);
				},
				button: function (e) {
					var t = e.nodeName.toLowerCase();
					return ("input" === t && "button" === e.type) || "button" === t;
				},
				text: function (e) {
					var t;
					return (
						"input" === e.nodeName.toLowerCase() &&
						"text" === e.type &&
						(null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
					);
				},
				first: u(function () {
					return [0];
				}),
				last: u(function (e, t) {
					return [t - 1];
				}),
				eq: u(function (e, t, n) {
					return [n < 0 ? n + t : n];
				}),
				even: u(function (e, t) {
					for (var n = 0; n < t; n += 2) e.push(n);
					return e;
				}),
				odd: u(function (e, t) {
					for (var n = 1; n < t; n += 2) e.push(n);
					return e;
				}),
				lt: u(function (e, t, n) {
					for (var i = n < 0 ? n + t : n; --i >= 0; ) e.push(i);
					return e;
				}),
				gt: u(function (e, t, n) {
					for (var i = n < 0 ? n + t : n; ++i < t; ) e.push(i);
					return e;
				}),
			},
		}).pseudos.nth = T.pseudos.eq),
		{ radio: !0, checkbox: !0, file: !0, password: !0, image: !0 }))
			T.pseudos[k] = a(k);
		for (k in { submit: !0, reset: !0 }) T.pseudos[k] = l(k);
		return (
			(p.prototype = T.filters = T.pseudos),
			(T.setFilters = new p()),
			($ = t.tokenize = function (e, n) {
				var i,
					o,
					r,
					s,
					a,
					l,
					c,
					u = U[e + " "];
				if (u) return n ? 0 : u.slice(0);
				for (a = e, l = [], c = T.preFilter; a; ) {
					for (s in ((i && !(o = le.exec(a))) ||
						(o && (a = a.slice(o[0].length) || a), l.push((r = []))),
					(i = !1),
					(o = ce.exec(a)) &&
						((i = o.shift()),
						r.push({ value: i, type: o[0].replace(ae, " ") }),
						(a = a.slice(i.length))),
					T.filter))
						!(o = he[s].exec(a)) ||
							(c[s] && !(o = c[s](o))) ||
							((i = o.shift()),
							r.push({ value: i, type: s, matches: o }),
							(a = a.slice(i.length)));
					if (!i) break;
				}
				return n ? a.length : a ? t.error(e) : U(e, l).slice(0);
			}),
			(A = t.compile = function (e, t) {
				var n,
					i = [],
					o = [],
					r = K[e + " "];
				if (!r) {
					for (t || (t = $(e)), n = t.length; n--; )
						(r = b(t[n]))[M] ? i.push(r) : o.push(r);
					(r = K(e, w(o, i))).selector = e;
				}
				return r;
			}),
			(_ = t.select = function (e, t, n, i) {
				var o,
					r,
					s,
					a,
					l,
					c = "function" == typeof e && e,
					u = !i && $((e = c.selector || e));
				if (((n = n || []), 1 === u.length)) {
					if (
						(r = u[0] = u[0].slice(0)).length > 2 &&
						"ID" === (s = r[0]).type &&
						9 === t.nodeType &&
						H &&
						T.relative[r[1].type]
					) {
						if (!(t = (T.find.ID(s.matches[0].replace(be, we), t) || [])[0]))
							return n;
						c && (t = t.parentNode), (e = e.slice(r.shift().value.length));
					}
					for (
						o = he.needsContext.test(e) ? 0 : r.length;
						o-- && ((s = r[o]), !T.relative[(a = s.type)]);

					)
						if (
							(l = T.find[a]) &&
							(i = l(
								s.matches[0].replace(be, we),
								(me.test(r[0].type) && d(t.parentNode)) || t
							))
						) {
							if ((r.splice(o, 1), !(e = i.length && h(r))))
								return J.apply(n, i), n;
							break;
						}
				}
				return (
					(c || A(e, u))(
						i,
						t,
						!H,
						n,
						!t || (me.test(e) && d(t.parentNode)) || t
					),
					n
				);
			}),
			(x.sortStable = M.split("").sort(Q).join("") === M),
			(x.detectDuplicates = !!j),
			L(),
			(x.sortDetached = o(function (e) {
				return 1 & e.compareDocumentPosition(q.createElement("fieldset"));
			})),
			o(function (e) {
				return (
					(e.innerHTML = "<a href='#'></a>"),
					"#" === e.firstChild.getAttribute("href")
				);
			}) ||
				r("type|href|height|width", function (e, t, n) {
					if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2);
				}),
			(x.attributes &&
				o(function (e) {
					return (
						(e.innerHTML = "<input/>"),
						e.firstChild.setAttribute("value", ""),
						"" === e.firstChild.getAttribute("value")
					);
				})) ||
				r("value", function (e, t, n) {
					if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue;
				}),
			o(function (e) {
				return null == e.getAttribute("disabled");
			}) ||
				r(te, function (e, t, n) {
					var i;
					if (!n)
						return !0 === e[t]
							? t.toLowerCase()
							: (i = e.getAttributeNode(t)) && i.specified
							? i.value
							: null;
				}),
			t
		);
	})(e);
	(ke.find = Te),
		(ke.expr = Te.selectors),
		(ke.expr[":"] = ke.expr.pseudos),
		(ke.uniqueSort = ke.unique = Te.uniqueSort),
		(ke.text = Te.getText),
		(ke.isXMLDoc = Te.isXML),
		(ke.contains = Te.contains),
		(ke.escapeSelector = Te.escape);
	var Se = function (e, t, n) {
			for (var i = [], o = void 0 !== n; (e = e[t]) && 9 !== e.nodeType; )
				if (1 === e.nodeType) {
					if (o && ke(e).is(n)) break;
					i.push(e);
				}
			return i;
		},
		Ce = function (e, t) {
			for (var n = []; e; e = e.nextSibling)
				1 === e.nodeType && e !== t && n.push(e);
			return n;
		},
		$e = ke.expr.match.needsContext,
		Ae = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;
	(ke.filter = function (e, t, n) {
		var i = t[0];
		return (
			n && (e = ":not(" + e + ")"),
			1 === t.length && 1 === i.nodeType
				? ke.find.matchesSelector(i, e)
					? [i]
					: []
				: ke.find.matches(
						e,
						ke.grep(t, function (e) {
							return 1 === e.nodeType;
						})
				  )
		);
	}),
		ke.fn.extend({
			find: function (e) {
				var t,
					n,
					i = this.length,
					o = this;
				if ("string" != typeof e)
					return this.pushStack(
						ke(e).filter(function () {
							for (t = 0; t < i; t++) if (ke.contains(o[t], this)) return !0;
						})
					);
				for (n = this.pushStack([]), t = 0; t < i; t++) ke.find(e, o[t], n);
				return i > 1 ? ke.uniqueSort(n) : n;
			},
			filter: function (e) {
				return this.pushStack(s(this, e || [], !1));
			},
			not: function (e) {
				return this.pushStack(s(this, e || [], !0));
			},
			is: function (e) {
				return !!s(
					this,
					"string" == typeof e && $e.test(e) ? ke(e) : e || [],
					!1
				).length;
			},
		});
	var _e,
		Ee = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
	((ke.fn.init = function (e, t, n) {
		var i, o;
		if (!e) return this;
		if (((n = n || _e), "string" == typeof e)) {
			if (
				!(i =
					"<" === e[0] && ">" === e[e.length - 1] && e.length >= 3
						? [null, e, null]
						: Ee.exec(e)) ||
				(!i[1] && t)
			)
				return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
			if (i[1]) {
				if (
					((t = t instanceof ke ? t[0] : t),
					ke.merge(
						this,
						ke.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : se, !0)
					),
					Ae.test(i[1]) && ke.isPlainObject(t))
				)
					for (i in t) me(this[i]) ? this[i](t[i]) : this.attr(i, t[i]);
				return this;
			}
			return (
				(o = se.getElementById(i[2])) && ((this[0] = o), (this.length = 1)),
				this
			);
		}
		return e.nodeType
			? ((this[0] = e), (this.length = 1), this)
			: me(e)
			? void 0 !== n.ready
				? n.ready(e)
				: e(ke)
			: ke.makeArray(e, this);
	}).prototype = ke.fn),
		(_e = ke(se));
	var De = /^(?:parents|prev(?:Until|All))/,
		je = { children: !0, contents: !0, next: !0, prev: !0 };
	ke.fn.extend({
		has: function (e) {
			var t = ke(e, this),
				n = t.length;
			return this.filter(function () {
				for (var e = 0; e < n; e++) if (ke.contains(this, t[e])) return !0;
			});
		},
		closest: function (e, t) {
			var n,
				i = 0,
				o = this.length,
				r = [],
				s = "string" != typeof e && ke(e);
			if (!$e.test(e))
				for (; i < o; i++)
					for (n = this[i]; n && n !== t; n = n.parentNode)
						if (
							n.nodeType < 11 &&
							(s
								? s.index(n) > -1
								: 1 === n.nodeType && ke.find.matchesSelector(n, e))
						) {
							r.push(n);
							break;
						}
			return this.pushStack(r.length > 1 ? ke.uniqueSort(r) : r);
		},
		index: function (e) {
			return e
				? "string" == typeof e
					? de.call(ke(e), this[0])
					: de.call(this, e.jquery ? e[0] : e)
				: this[0] && this[0].parentNode
				? this.first().prevAll().length
				: -1;
		},
		add: function (e, t) {
			return this.pushStack(ke.uniqueSort(ke.merge(this.get(), ke(e, t))));
		},
		addBack: function (e) {
			return this.add(null == e ? this.prevObject : this.prevObject.filter(e));
		},
	}),
		ke.each(
			{
				parent: function (e) {
					var t = e.parentNode;
					return t && 11 !== t.nodeType ? t : null;
				},
				parents: function (e) {
					return Se(e, "parentNode");
				},
				parentsUntil: function (e, t, n) {
					return Se(e, "parentNode", n);
				},
				next: function (e) {
					return a(e, "nextSibling");
				},
				prev: function (e) {
					return a(e, "previousSibling");
				},
				nextAll: function (e) {
					return Se(e, "nextSibling");
				},
				prevAll: function (e) {
					return Se(e, "previousSibling");
				},
				nextUntil: function (e, t, n) {
					return Se(e, "nextSibling", n);
				},
				prevUntil: function (e, t, n) {
					return Se(e, "previousSibling", n);
				},
				siblings: function (e) {
					return Ce((e.parentNode || {}).firstChild, e);
				},
				children: function (e) {
					return Ce(e.firstChild);
				},
				contents: function (e) {
					return r(e, "iframe")
						? e.contentDocument
						: (r(e, "template") && (e = e.content || e),
						  ke.merge([], e.childNodes));
				},
			},
			function (e, t) {
				ke.fn[e] = function (n, i) {
					var o = ke.map(this, t, n);
					return (
						"Until" !== e.slice(-5) && (i = n),
						i && "string" == typeof i && (o = ke.filter(i, o)),
						this.length > 1 &&
							(je[e] || ke.uniqueSort(o), De.test(e) && o.reverse()),
						this.pushStack(o)
					);
				};
			}
		);
	var Le = /[^\x20\t\r\n\f]+/g;
	(ke.Callbacks = function (e) {
		e = "string" == typeof e ? l(e) : ke.extend({}, e);
		var t,
			n,
			o,
			r,
			s = [],
			a = [],
			c = -1,
			u = function () {
				for (r = r || e.once, o = t = !0; a.length; c = -1)
					for (n = a.shift(); ++c < s.length; )
						!1 === s[c].apply(n[0], n[1]) &&
							e.stopOnFalse &&
							((c = s.length), (n = !1));
				e.memory || (n = !1), (t = !1), r && (s = n ? [] : "");
			},
			d = {
				add: function () {
					return (
						s &&
							(n && !t && ((c = s.length - 1), a.push(n)),
							(function o(t) {
								ke.each(t, function (t, n) {
									me(n)
										? (e.unique && d.has(n)) || s.push(n)
										: n && n.length && "string" !== i(n) && o(n);
								});
							})(arguments),
							n && !t && u()),
						this
					);
				},
				remove: function () {
					return (
						ke.each(arguments, function (e, t) {
							for (var n; (n = ke.inArray(t, s, n)) > -1; )
								s.splice(n, 1), n <= c && c--;
						}),
						this
					);
				},
				has: function (e) {
					return e ? ke.inArray(e, s) > -1 : s.length > 0;
				},
				empty: function () {
					return s && (s = []), this;
				},
				disable: function () {
					return (r = a = []), (s = n = ""), this;
				},
				disabled: function () {
					return !s;
				},
				lock: function () {
					return (r = a = []), n || t || (s = n = ""), this;
				},
				locked: function () {
					return !!r;
				},
				fireWith: function (e, n) {
					return (
						r ||
							((n = [e, (n = n || []).slice ? n.slice() : n]),
							a.push(n),
							t || u()),
						this
					);
				},
				fire: function () {
					return d.fireWith(this, arguments), this;
				},
				fired: function () {
					return !!o;
				},
			};
		return d;
	}),
		ke.extend({
			Deferred: function (t) {
				var n = [
						[
							"notify",
							"progress",
							ke.Callbacks("memory"),
							ke.Callbacks("memory"),
							2,
						],
						[
							"resolve",
							"done",
							ke.Callbacks("once memory"),
							ke.Callbacks("once memory"),
							0,
							"resolved",
						],
						[
							"reject",
							"fail",
							ke.Callbacks("once memory"),
							ke.Callbacks("once memory"),
							1,
							"rejected",
						],
					],
					i = "pending",
					o = {
						state: function () {
							return i;
						},
						always: function () {
							return r.done(arguments).fail(arguments), this;
						},
						catch: function (e) {
							return o.then(null, e);
						},
						pipe: function () {
							var e = arguments;
							return ke
								.Deferred(function (t) {
									ke.each(n, function (n, i) {
										var o = me(e[i[4]]) && e[i[4]];
										r[i[1]](function () {
											var e = o && o.apply(this, arguments);
											e && me(e.promise)
												? e
														.promise()
														.progress(t.notify)
														.done(t.resolve)
														.fail(t.reject)
												: t[i[0] + "With"](this, o ? [e] : arguments);
										});
									}),
										(e = null);
								})
								.promise();
						},
						then: function (t, i, o) {
							function r(t, n, i, o) {
								return function () {
									var a = this,
										l = arguments,
										d = function () {
											var e, d;
											if (!(t < s)) {
												if ((e = i.apply(a, l)) === n.promise())
													throw new TypeError("Thenable self-resolution");
												(d =
													e &&
													("object" == typeof e || "function" == typeof e) &&
													e.then),
													me(d)
														? o
															? d.call(e, r(s, n, c, o), r(s, n, u, o))
															: (s++,
															  d.call(
																	e,
																	r(s, n, c, o),
																	r(s, n, u, o),
																	r(s, n, c, n.notifyWith)
															  ))
														: (i !== c && ((a = void 0), (l = [e])),
														  (o || n.resolveWith)(a, l));
											}
										},
										p = o
											? d
											: function () {
													try {
														d();
													} catch (e) {
														ke.Deferred.exceptionHook &&
															ke.Deferred.exceptionHook(e, p.stackTrace),
															t + 1 >= s &&
																(i !== u && ((a = void 0), (l = [e])),
																n.rejectWith(a, l));
													}
											  };
									t
										? p()
										: (ke.Deferred.getStackHook &&
												(p.stackTrace = ke.Deferred.getStackHook()),
										  e.setTimeout(p));
								};
							}
							var s = 0;
							return ke
								.Deferred(function (e) {
									n[0][3].add(r(0, e, me(o) ? o : c, e.notifyWith)),
										n[1][3].add(r(0, e, me(t) ? t : c)),
										n[2][3].add(r(0, e, me(i) ? i : u));
								})
								.promise();
						},
						promise: function (e) {
							return null != e ? ke.extend(e, o) : o;
						},
					},
					r = {};
				return (
					ke.each(n, function (e, t) {
						var s = t[2],
							a = t[5];
						(o[t[1]] = s.add),
							a &&
								s.add(
									function () {
										i = a;
									},
									n[3 - e][2].disable,
									n[3 - e][3].disable,
									n[0][2].lock,
									n[0][3].lock
								),
							s.add(t[3].fire),
							(r[t[0]] = function () {
								return (
									r[t[0] + "With"](this === r ? void 0 : this, arguments), this
								);
							}),
							(r[t[0] + "With"] = s.fireWith);
					}),
					o.promise(r),
					t && t.call(r, r),
					r
				);
			},
			when: function (e) {
				var t = arguments.length,
					n = t,
					i = Array(n),
					o = le.call(arguments),
					r = ke.Deferred(),
					s = function (e) {
						return function (n) {
							(i[e] = this),
								(o[e] = arguments.length > 1 ? le.call(arguments) : n),
								--t || r.resolveWith(i, o);
						};
					};
				if (
					t <= 1 &&
					(d(e, r.done(s(n)).resolve, r.reject, !t),
					"pending" === r.state() || me(o[n] && o[n].then))
				)
					return r.then();
				for (; n--; ) d(o[n], s(n), r.reject);
				return r.promise();
			},
		});
	var qe = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
	(ke.Deferred.exceptionHook = function (t, n) {
		e.console &&
			e.console.warn &&
			t &&
			qe.test(t.name) &&
			e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n);
	}),
		(ke.readyException = function (t) {
			e.setTimeout(function () {
				throw t;
			});
		});
	var Oe = ke.Deferred();
	(ke.fn.ready = function (e) {
		return (
			Oe.then(e)["catch"](function (e) {
				ke.readyException(e);
			}),
			this
		);
	}),
		ke.extend({
			isReady: !1,
			readyWait: 1,
			ready: function (e) {
				(!0 === e ? --ke.readyWait : ke.isReady) ||
					((ke.isReady = !0),
					(!0 !== e && --ke.readyWait > 0) || Oe.resolveWith(se, [ke]));
			},
		}),
		(ke.ready.then = Oe.then),
		"complete" === se.readyState ||
		("loading" !== se.readyState && !se.documentElement.doScroll)
			? e.setTimeout(ke.ready)
			: (se.addEventListener("DOMContentLoaded", p),
			  e.addEventListener("load", p));
	var He = function (e, t, n, o, r, s, a) {
			var l = 0,
				c = e.length,
				u = null == n;
			if ("object" === i(n))
				for (l in ((r = !0), n)) He(e, t, l, n[l], !0, s, a);
			else if (
				void 0 !== o &&
				((r = !0),
				me(o) || (a = !0),
				u &&
					(a
						? (t.call(e, o), (t = null))
						: ((u = t),
						  (t = function (e, t, n) {
								return u.call(ke(e), n);
						  }))),
				t)
			)
				for (; l < c; l++) t(e[l], n, a ? o : o.call(e[l], l, t(e[l], n)));
			return r ? e : u ? t.call(e) : c ? t(e[0], n) : s;
		},
		Ne = /^-ms-/,
		ze = /-([a-z])/g,
		Ie = function (e) {
			return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType;
		};
	(g.uid = 1),
		(g.prototype = {
			cache: function (e) {
				var t = e[this.expando];
				return (
					t ||
						((t = {}),
						Ie(e) &&
							(e.nodeType
								? (e[this.expando] = t)
								: Object.defineProperty(e, this.expando, {
										value: t,
										configurable: !0,
								  }))),
					t
				);
			},
			set: function (e, t, n) {
				var i,
					o = this.cache(e);
				if ("string" == typeof t) o[f(t)] = n;
				else for (i in t) o[f(i)] = t[i];
				return o;
			},
			get: function (e, t) {
				return void 0 === t
					? this.cache(e)
					: e[this.expando] && e[this.expando][f(t)];
			},
			access: function (e, t, n) {
				return void 0 === t || (t && "string" == typeof t && void 0 === n)
					? this.get(e, t)
					: (this.set(e, t, n), void 0 !== n ? n : t);
			},
			remove: function (e, t) {
				var n,
					i = e[this.expando];
				if (void 0 !== i) {
					if (void 0 !== t) {
						n = (t = Array.isArray(t)
							? t.map(f)
							: (t = f(t)) in i
							? [t]
							: t.match(Le) || []).length;
						for (; n--; ) delete i[t[n]];
					}
					(void 0 === t || ke.isEmptyObject(i)) &&
						(e.nodeType ? (e[this.expando] = void 0) : delete e[this.expando]);
				}
			},
			hasData: function (e) {
				var t = e[this.expando];
				return void 0 !== t && !ke.isEmptyObject(t);
			},
		});
	var Pe = new g(),
		Me = new g(),
		Be = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
		Re = /[A-Z]/g;
	ke.extend({
		hasData: function (e) {
			return Me.hasData(e) || Pe.hasData(e);
		},
		data: function (e, t, n) {
			return Me.access(e, t, n);
		},
		removeData: function (e, t) {
			Me.remove(e, t);
		},
		_data: function (e, t, n) {
			return Pe.access(e, t, n);
		},
		_removeData: function (e, t) {
			Pe.remove(e, t);
		},
	}),
		ke.fn.extend({
			data: function (e, t) {
				var n,
					i,
					o,
					r = this[0],
					s = r && r.attributes;
				if (void 0 === e) {
					if (
						this.length &&
						((o = Me.get(r)), 1 === r.nodeType && !Pe.get(r, "hasDataAttrs"))
					) {
						for (n = s.length; n--; )
							s[n] &&
								0 === (i = s[n].name).indexOf("data-") &&
								((i = f(i.slice(5))), y(r, i, o[i]));
						Pe.set(r, "hasDataAttrs", !0);
					}
					return o;
				}
				return "object" == typeof e
					? this.each(function () {
							Me.set(this, e);
					  })
					: He(
							this,
							function (t) {
								var n;
								if (r && void 0 === t) {
									if (void 0 !== (n = Me.get(r, e))) return n;
									if (void 0 !== (n = y(r, e))) return n;
								} else
									this.each(function () {
										Me.set(this, e, t);
									});
							},
							null,
							t,
							arguments.length > 1,
							null,
							!0
					  );
			},
			removeData: function (e) {
				return this.each(function () {
					Me.remove(this, e);
				});
			},
		}),
		ke.extend({
			queue: function (e, t, n) {
				var i;
				if (e)
					return (
						(t = (t || "fx") + "queue"),
						(i = Pe.get(e, t)),
						n &&
							(!i || Array.isArray(n)
								? (i = Pe.access(e, t, ke.makeArray(n)))
								: i.push(n)),
						i || []
					);
			},
			dequeue: function (e, t) {
				t = t || "fx";
				var n = ke.queue(e, t),
					i = n.length,
					o = n.shift(),
					r = ke._queueHooks(e, t),
					s = function () {
						ke.dequeue(e, t);
					};
				"inprogress" === o && ((o = n.shift()), i--),
					o &&
						("fx" === t && n.unshift("inprogress"),
						delete r.stop,
						o.call(e, s, r)),
					!i && r && r.empty.fire();
			},
			_queueHooks: function (e, t) {
				var n = t + "queueHooks";
				return (
					Pe.get(e, n) ||
					Pe.access(e, n, {
						empty: ke.Callbacks("once memory").add(function () {
							Pe.remove(e, [t + "queue", n]);
						}),
					})
				);
			},
		}),
		ke.fn.extend({
			queue: function (e, t) {
				var n = 2;
				return (
					"string" != typeof e && ((t = e), (e = "fx"), n--),
					arguments.length < n
						? ke.queue(this[0], e)
						: void 0 === t
						? this
						: this.each(function () {
								var n = ke.queue(this, e, t);
								ke._queueHooks(this, e),
									"fx" === e && "inprogress" !== n[0] && ke.dequeue(this, e);
						  })
				);
			},
			dequeue: function (e) {
				return this.each(function () {
					ke.dequeue(this, e);
				});
			},
			clearQueue: function (e) {
				return this.queue(e || "fx", []);
			},
			promise: function (e, t) {
				var n,
					i = 1,
					o = ke.Deferred(),
					r = this,
					s = this.length,
					a = function () {
						--i || o.resolveWith(r, [r]);
					};
				for (
					"string" != typeof e && ((t = e), (e = void 0)), e = e || "fx";
					s--;

				)
					(n = Pe.get(r[s], e + "queueHooks")) &&
						n.empty &&
						(i++, n.empty.add(a));
				return a(), o.promise(t);
			},
		});
	var Fe = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
		We = new RegExp("^(?:([+-])=|)(" + Fe + ")([a-z%]*)$", "i"),
		Ue = ["Top", "Right", "Bottom", "Left"],
		Ke = function (e, t) {
			return (
				"none" === (e = t || e).style.display ||
				("" === e.style.display &&
					ke.contains(e.ownerDocument, e) &&
					"none" === ke.css(e, "display"))
			);
		},
		Qe = function (e, t, n, i) {
			var o,
				r,
				s = {};
			for (r in t) (s[r] = e.style[r]), (e.style[r] = t[r]);
			for (r in ((o = n.apply(e, i || [])), t)) e.style[r] = s[r];
			return o;
		},
		Ve = {};
	ke.fn.extend({
		show: function () {
			return w(this, !0);
		},
		hide: function () {
			return w(this);
		},
		toggle: function (e) {
			return "boolean" == typeof e
				? e
					? this.show()
					: this.hide()
				: this.each(function () {
						Ke(this) ? ke(this).show() : ke(this).hide();
				  });
		},
	});
	var Xe = /^(?:checkbox|radio)$/i,
		Ye = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
		Ge = /^$|^module$|\/(?:java|ecma)script/i,
		Je = {
			option: [1, "<select multiple='multiple'>", "</select>"],
			thead: [1, "<table>", "</table>"],
			col: [2, "<table><colgroup>", "</colgroup></table>"],
			tr: [2, "<table><tbody>", "</tbody></table>"],
			td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
			_default: [0, "", ""],
		};
	(Je.optgroup = Je.option),
		(Je.tbody = Je.tfoot = Je.colgroup = Je.caption = Je.thead),
		(Je.th = Je.td);
	var Ze = /<|&#?\w+;/;
	!(function () {
		var e = se.createDocumentFragment().appendChild(se.createElement("div")),
			t = se.createElement("input");
		t.setAttribute("type", "radio"),
			t.setAttribute("checked", "checked"),
			t.setAttribute("name", "t"),
			e.appendChild(t),
			(ye.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked),
			(e.innerHTML = "<textarea>x</textarea>"),
			(ye.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue);
	})();
	var et = se.documentElement,
		tt = /^key/,
		nt = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
		it = /^([^.]*)(?:\.(.+)|)/;
	(ke.event = {
		global: {},
		add: function (e, t, n, i, o) {
			var r,
				s,
				a,
				l,
				c,
				u,
				d,
				p,
				h,
				f,
				g,
				v = Pe.get(e);
			if (v)
				for (
					n.handler && ((n = (r = n).handler), (o = r.selector)),
						o && ke.find.matchesSelector(et, o),
						n.guid || (n.guid = ke.guid++),
						(l = v.events) || (l = v.events = {}),
						(s = v.handle) ||
							(s = v.handle = function (t) {
								return void 0 !== ke && ke.event.triggered !== t.type
									? ke.event.dispatch.apply(e, arguments)
									: void 0;
							}),
						c = (t = (t || "").match(Le) || [""]).length;
					c--;

				)
					(h = g = (a = it.exec(t[c]) || [])[1]),
						(f = (a[2] || "").split(".").sort()),
						h &&
							((d = ke.event.special[h] || {}),
							(h = (o ? d.delegateType : d.bindType) || h),
							(d = ke.event.special[h] || {}),
							(u = ke.extend(
								{
									type: h,
									origType: g,
									data: i,
									handler: n,
									guid: n.guid,
									selector: o,
									needsContext: o && ke.expr.match.needsContext.test(o),
									namespace: f.join("."),
								},
								r
							)),
							(p = l[h]) ||
								(((p = l[h] = []).delegateCount = 0),
								(d.setup && !1 !== d.setup.call(e, i, f, s)) ||
									(e.addEventListener && e.addEventListener(h, s))),
							d.add &&
								(d.add.call(e, u), u.handler.guid || (u.handler.guid = n.guid)),
							o ? p.splice(p.delegateCount++, 0, u) : p.push(u),
							(ke.event.global[h] = !0));
		},
		remove: function (e, t, n, i, o) {
			var r,
				s,
				a,
				l,
				c,
				u,
				d,
				p,
				h,
				f,
				g,
				v = Pe.hasData(e) && Pe.get(e);
			if (v && (l = v.events)) {
				for (c = (t = (t || "").match(Le) || [""]).length; c--; )
					if (
						((h = g = (a = it.exec(t[c]) || [])[1]),
						(f = (a[2] || "").split(".").sort()),
						h)
					) {
						for (
							d = ke.event.special[h] || {},
								p = l[(h = (i ? d.delegateType : d.bindType) || h)] || [],
								a =
									a[2] &&
									new RegExp("(^|\\.)" + f.join("\\.(?:.*\\.|)") + "(\\.|$)"),
								s = r = p.length;
							r--;

						)
							(u = p[r]),
								(!o && g !== u.origType) ||
									(n && n.guid !== u.guid) ||
									(a && !a.test(u.namespace)) ||
									(i && i !== u.selector && ("**" !== i || !u.selector)) ||
									(p.splice(r, 1),
									u.selector && p.delegateCount--,
									d.remove && d.remove.call(e, u));
						s &&
							!p.length &&
							((d.teardown && !1 !== d.teardown.call(e, f, v.handle)) ||
								ke.removeEvent(e, h, v.handle),
							delete l[h]);
					} else for (h in l) ke.event.remove(e, h + t[c], n, i, !0);
				ke.isEmptyObject(l) && Pe.remove(e, "handle events");
			}
		},
		dispatch: function (e) {
			var t,
				n,
				i,
				o,
				r,
				s,
				a = ke.event.fix(e),
				l = new Array(arguments.length),
				c = (Pe.get(this, "events") || {})[a.type] || [],
				u = ke.event.special[a.type] || {};
			for (l[0] = a, t = 1; t < arguments.length; t++) l[t] = arguments[t];
			if (
				((a.delegateTarget = this),
				!u.preDispatch || !1 !== u.preDispatch.call(this, a))
			) {
				for (
					s = ke.event.handlers.call(this, a, c), t = 0;
					(o = s[t++]) && !a.isPropagationStopped();

				)
					for (
						a.currentTarget = o.elem, n = 0;
						(r = o.handlers[n++]) && !a.isImmediatePropagationStopped();

					)
						(a.rnamespace && !a.rnamespace.test(r.namespace)) ||
							((a.handleObj = r),
							(a.data = r.data),
							void 0 !==
								(i = (
									(ke.event.special[r.origType] || {}).handle || r.handler
								).apply(o.elem, l)) &&
								!1 === (a.result = i) &&
								(a.preventDefault(), a.stopPropagation()));
				return u.postDispatch && u.postDispatch.call(this, a), a.result;
			}
		},
		handlers: function (e, t) {
			var n,
				i,
				o,
				r,
				s,
				a = [],
				l = t.delegateCount,
				c = e.target;
			if (l && c.nodeType && !("click" === e.type && e.button >= 1))
				for (; c !== this; c = c.parentNode || this)
					if (1 === c.nodeType && ("click" !== e.type || !0 !== c.disabled)) {
						for (r = [], s = {}, n = 0; n < l; n++)
							void 0 === s[(o = (i = t[n]).selector + " ")] &&
								(s[o] = i.needsContext
									? ke(o, this).index(c) > -1
									: ke.find(o, this, null, [c]).length),
								s[o] && r.push(i);
						r.length && a.push({ elem: c, handlers: r });
					}
			return (
				(c = this), l < t.length && a.push({ elem: c, handlers: t.slice(l) }), a
			);
		},
		addProp: function (e, t) {
			Object.defineProperty(ke.Event.prototype, e, {
				enumerable: !0,
				configurable: !0,
				get: me(t)
					? function () {
							if (this.originalEvent) return t(this.originalEvent);
					  }
					: function () {
							if (this.originalEvent) return this.originalEvent[e];
					  },
				set: function (t) {
					Object.defineProperty(this, e, {
						enumerable: !0,
						configurable: !0,
						writable: !0,
						value: t,
					});
				},
			});
		},
		fix: function (e) {
			return e[ke.expando] ? e : new ke.Event(e);
		},
		special: {
			load: { noBubble: !0 },
			focus: {
				trigger: function () {
					if (this !== $() && this.focus) return this.focus(), !1;
				},
				delegateType: "focusin",
			},
			blur: {
				trigger: function () {
					if (this === $() && this.blur) return this.blur(), !1;
				},
				delegateType: "focusout",
			},
			click: {
				trigger: function () {
					if ("checkbox" === this.type && this.click && r(this, "input"))
						return this.click(), !1;
				},
				_default: function (e) {
					return r(e.target, "a");
				},
			},
			beforeunload: {
				postDispatch: function (e) {
					void 0 !== e.result &&
						e.originalEvent &&
						(e.originalEvent.returnValue = e.result);
				},
			},
		},
	}),
		(ke.removeEvent = function (e, t, n) {
			e.removeEventListener && e.removeEventListener(t, n);
		}),
		(ke.Event = function (e, t) {
			if (!(this instanceof ke.Event)) return new ke.Event(e, t);
			e && e.type
				? ((this.originalEvent = e),
				  (this.type = e.type),
				  (this.isDefaultPrevented =
						e.defaultPrevented ||
						(void 0 === e.defaultPrevented && !1 === e.returnValue)
							? S
							: C),
				  (this.target =
						e.target && 3 === e.target.nodeType
							? e.target.parentNode
							: e.target),
				  (this.currentTarget = e.currentTarget),
				  (this.relatedTarget = e.relatedTarget))
				: (this.type = e),
				t && ke.extend(this, t),
				(this.timeStamp = (e && e.timeStamp) || Date.now()),
				(this[ke.expando] = !0);
		}),
		(ke.Event.prototype = {
			constructor: ke.Event,
			isDefaultPrevented: C,
			isPropagationStopped: C,
			isImmediatePropagationStopped: C,
			isSimulated: !1,
			preventDefault: function () {
				var e = this.originalEvent;
				(this.isDefaultPrevented = S),
					e && !this.isSimulated && e.preventDefault();
			},
			stopPropagation: function () {
				var e = this.originalEvent;
				(this.isPropagationStopped = S),
					e && !this.isSimulated && e.stopPropagation();
			},
			stopImmediatePropagation: function () {
				var e = this.originalEvent;
				(this.isImmediatePropagationStopped = S),
					e && !this.isSimulated && e.stopImmediatePropagation(),
					this.stopPropagation();
			},
		}),
		ke.each(
			{
				altKey: !0,
				bubbles: !0,
				cancelable: !0,
				changedTouches: !0,
				ctrlKey: !0,
				detail: !0,
				eventPhase: !0,
				metaKey: !0,
				pageX: !0,
				pageY: !0,
				shiftKey: !0,
				view: !0,
				char: !0,
				charCode: !0,
				key: !0,
				keyCode: !0,
				button: !0,
				buttons: !0,
				clientX: !0,
				clientY: !0,
				offsetX: !0,
				offsetY: !0,
				pointerId: !0,
				pointerType: !0,
				screenX: !0,
				screenY: !0,
				targetTouches: !0,
				toElement: !0,
				touches: !0,
				which: function (e) {
					var t = e.button;
					return null == e.which && tt.test(e.type)
						? null != e.charCode
							? e.charCode
							: e.keyCode
						: !e.which && void 0 !== t && nt.test(e.type)
						? 1 & t
							? 1
							: 2 & t
							? 3
							: 4 & t
							? 2
							: 0
						: e.which;
				},
			},
			ke.event.addProp
		),
		ke.each(
			{
				mouseenter: "mouseover",
				mouseleave: "mouseout",
				pointerenter: "pointerover",
				pointerleave: "pointerout",
			},
			function (e, t) {
				ke.event.special[e] = {
					delegateType: t,
					bindType: t,
					handle: function (e) {
						var n,
							i = this,
							o = e.relatedTarget,
							r = e.handleObj;
						return (
							(o && (o === i || ke.contains(i, o))) ||
								((e.type = r.origType),
								(n = r.handler.apply(this, arguments)),
								(e.type = t)),
							n
						);
					},
				};
			}
		),
		ke.fn.extend({
			on: function (e, t, n, i) {
				return A(this, e, t, n, i);
			},
			one: function (e, t, n, i) {
				return A(this, e, t, n, i, 1);
			},
			off: function (e, t, n) {
				var i, o;
				if (e && e.preventDefault && e.handleObj)
					return (
						(i = e.handleObj),
						ke(e.delegateTarget).off(
							i.namespace ? i.origType + "." + i.namespace : i.origType,
							i.selector,
							i.handler
						),
						this
					);
				if ("object" == typeof e) {
					for (o in e) this.off(o, t, e[o]);
					return this;
				}
				return (
					(!1 !== t && "function" != typeof t) || ((n = t), (t = void 0)),
					!1 === n && (n = C),
					this.each(function () {
						ke.event.remove(this, e, n, t);
					})
				);
			},
		});
	var ot = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
		rt = /<script|<style|<link/i,
		st = /checked\s*(?:[^=]|=\s*.checked.)/i,
		at = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
	ke.extend({
		htmlPrefilter: function (e) {
			return e.replace(ot, "<$1></$2>");
		},
		clone: function (e, t, n) {
			var i,
				o,
				r,
				s,
				a = e.cloneNode(!0),
				l = ke.contains(e.ownerDocument, e);
			if (
				!(
					ye.noCloneChecked ||
					(1 !== e.nodeType && 11 !== e.nodeType) ||
					ke.isXMLDoc(e)
				)
			)
				for (s = k(a), i = 0, o = (r = k(e)).length; i < o; i++) L(r[i], s[i]);
			if (t)
				if (n)
					for (r = r || k(e), s = s || k(a), i = 0, o = r.length; i < o; i++)
						j(r[i], s[i]);
				else j(e, a);
			return (s = k(a, "script")).length > 0 && x(s, !l && k(e, "script")), a;
		},
		cleanData: function (e) {
			for (var t, n, i, o = ke.event.special, r = 0; void 0 !== (n = e[r]); r++)
				if (Ie(n)) {
					if ((t = n[Pe.expando])) {
						if (t.events)
							for (i in t.events)
								o[i] ? ke.event.remove(n, i) : ke.removeEvent(n, i, t.handle);
						n[Pe.expando] = void 0;
					}
					n[Me.expando] && (n[Me.expando] = void 0);
				}
		},
	}),
		ke.fn.extend({
			detach: function (e) {
				return O(this, e, !0);
			},
			remove: function (e) {
				return O(this, e);
			},
			text: function (e) {
				return He(
					this,
					function (e) {
						return void 0 === e
							? ke.text(this)
							: this.empty().each(function () {
									(1 !== this.nodeType &&
										11 !== this.nodeType &&
										9 !== this.nodeType) ||
										(this.textContent = e);
							  });
					},
					null,
					e,
					arguments.length
				);
			},
			append: function () {
				return q(this, arguments, function (e) {
					(1 !== this.nodeType &&
						11 !== this.nodeType &&
						9 !== this.nodeType) ||
						_(this, e).appendChild(e);
				});
			},
			prepend: function () {
				return q(this, arguments, function (e) {
					if (
						1 === this.nodeType ||
						11 === this.nodeType ||
						9 === this.nodeType
					) {
						var t = _(this, e);
						t.insertBefore(e, t.firstChild);
					}
				});
			},
			before: function () {
				return q(this, arguments, function (e) {
					this.parentNode && this.parentNode.insertBefore(e, this);
				});
			},
			after: function () {
				return q(this, arguments, function (e) {
					this.parentNode && this.parentNode.insertBefore(e, this.nextSibling);
				});
			},
			empty: function () {
				for (var e, t = 0; null != (e = this[t]); t++)
					1 === e.nodeType && (ke.cleanData(k(e, !1)), (e.textContent = ""));
				return this;
			},
			clone: function (e, t) {
				return (
					(e = null != e && e),
					(t = null == t ? e : t),
					this.map(function () {
						return ke.clone(this, e, t);
					})
				);
			},
			html: function (e) {
				return He(
					this,
					function (e) {
						var t = this[0] || {},
							n = 0,
							i = this.length;
						if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
						if (
							"string" == typeof e &&
							!rt.test(e) &&
							!Je[(Ye.exec(e) || ["", ""])[1].toLowerCase()]
						) {
							e = ke.htmlPrefilter(e);
							try {
								for (; n < i; n++)
									1 === (t = this[n] || {}).nodeType &&
										(ke.cleanData(k(t, !1)), (t.innerHTML = e));
								t = 0;
							} catch (e) {}
						}
						t && this.empty().append(e);
					},
					null,
					e,
					arguments.length
				);
			},
			replaceWith: function () {
				var e = [];
				return q(
					this,
					arguments,
					function (t) {
						var n = this.parentNode;
						ke.inArray(this, e) < 0 &&
							(ke.cleanData(k(this)), n && n.replaceChild(t, this));
					},
					e
				);
			},
		}),
		ke.each(
			{
				appendTo: "append",
				prependTo: "prepend",
				insertBefore: "before",
				insertAfter: "after",
				replaceAll: "replaceWith",
			},
			function (e, t) {
				ke.fn[e] = function (e) {
					for (var n, i = [], o = ke(e), r = o.length - 1, s = 0; s <= r; s++)
						(n = s === r ? this : this.clone(!0)),
							ke(o[s])[t](n),
							ue.apply(i, n.get());
					return this.pushStack(i);
				};
			}
		);
	var lt = new RegExp("^(" + Fe + ")(?!px)[a-z%]+$", "i"),
		ct = function (t) {
			var n = t.ownerDocument.defaultView;
			return (n && n.opener) || (n = e), n.getComputedStyle(t);
		},
		ut = new RegExp(Ue.join("|"), "i");
	!(function () {
		function t() {
			if (c) {
				(l.style.cssText =
					"position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0"),
					(c.style.cssText =
						"position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%"),
					et.appendChild(l).appendChild(c);
				var t = e.getComputedStyle(c);
				(i = "1%" !== t.top),
					(a = 12 === n(t.marginLeft)),
					(c.style.right = "60%"),
					(s = 36 === n(t.right)),
					(o = 36 === n(t.width)),
					(c.style.position = "absolute"),
					(r = 36 === c.offsetWidth || "absolute"),
					et.removeChild(l),
					(c = null);
			}
		}
		function n(e) {
			return Math.round(parseFloat(e));
		}
		var i,
			o,
			r,
			s,
			a,
			l = se.createElement("div"),
			c = se.createElement("div");
		c.style &&
			((c.style.backgroundClip = "content-box"),
			(c.cloneNode(!0).style.backgroundClip = ""),
			(ye.clearCloneStyle = "content-box" === c.style.backgroundClip),
			ke.extend(ye, {
				boxSizingReliable: function () {
					return t(), o;
				},
				pixelBoxStyles: function () {
					return t(), s;
				},
				pixelPosition: function () {
					return t(), i;
				},
				reliableMarginLeft: function () {
					return t(), a;
				},
				scrollboxSize: function () {
					return t(), r;
				},
			}));
	})();
	var dt = /^(none|table(?!-c[ea]).+)/,
		pt = /^--/,
		ht = { position: "absolute", visibility: "hidden", display: "block" },
		ft = { letterSpacing: "0", fontWeight: "400" },
		gt = ["Webkit", "Moz", "ms"],
		vt = se.createElement("div").style;
	ke.extend({
		cssHooks: {
			opacity: {
				get: function (e, t) {
					if (t) {
						var n = H(e, "opacity");
						return "" === n ? "1" : n;
					}
				},
			},
		},
		cssNumber: {
			animationIterationCount: !0,
			columnCount: !0,
			fillOpacity: !0,
			flexGrow: !0,
			flexShrink: !0,
			fontWeight: !0,
			lineHeight: !0,
			opacity: !0,
			order: !0,
			orphans: !0,
			widows: !0,
			zIndex: !0,
			zoom: !0,
		},
		cssProps: {},
		style: function (e, t, n, i) {
			if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
				var o,
					r,
					s,
					a = f(t),
					l = pt.test(t),
					c = e.style;
				if (
					(l || (t = I(a)),
					(s = ke.cssHooks[t] || ke.cssHooks[a]),
					void 0 === n)
				)
					return s && "get" in s && void 0 !== (o = s.get(e, !1, i)) ? o : c[t];
				"string" == (r = typeof n) &&
					(o = We.exec(n)) &&
					o[1] &&
					((n = m(e, t, o)), (r = "number")),
					null != n &&
						n == n &&
						("number" === r &&
							(n += (o && o[3]) || (ke.cssNumber[a] ? "" : "px")),
						ye.clearCloneStyle ||
							"" !== n ||
							0 !== t.indexOf("background") ||
							(c[t] = "inherit"),
						(s && "set" in s && void 0 === (n = s.set(e, n, i))) ||
							(l ? c.setProperty(t, n) : (c[t] = n)));
			}
		},
		css: function (e, t, n, i) {
			var o,
				r,
				s,
				a = f(t);
			return (
				pt.test(t) || (t = I(a)),
				(s = ke.cssHooks[t] || ke.cssHooks[a]) &&
					"get" in s &&
					(o = s.get(e, !0, n)),
				void 0 === o && (o = H(e, t, i)),
				"normal" === o && t in ft && (o = ft[t]),
				"" === n || n
					? ((r = parseFloat(o)), !0 === n || isFinite(r) ? r || 0 : o)
					: o
			);
		},
	}),
		ke.each(["height", "width"], function (e, t) {
			ke.cssHooks[t] = {
				get: function (e, n, i) {
					if (n)
						return !dt.test(ke.css(e, "display")) ||
							(e.getClientRects().length && e.getBoundingClientRect().width)
							? B(e, t, i)
							: Qe(e, ht, function () {
									return B(e, t, i);
							  });
				},
				set: function (e, n, i) {
					var o,
						r = ct(e),
						s = "border-box" === ke.css(e, "boxSizing", !1, r),
						a = i && M(e, t, i, s, r);
					return (
						s &&
							ye.scrollboxSize() === r.position &&
							(a -= Math.ceil(
								e["offset" + t[0].toUpperCase() + t.slice(1)] -
									parseFloat(r[t]) -
									M(e, t, "border", !1, r) -
									0.5
							)),
						a &&
							(o = We.exec(n)) &&
							"px" !== (o[3] || "px") &&
							((e.style[t] = n), (n = ke.css(e, t))),
						P(e, n, a)
					);
				},
			};
		}),
		(ke.cssHooks.marginLeft = N(ye.reliableMarginLeft, function (e, t) {
			if (t)
				return (
					(parseFloat(H(e, "marginLeft")) ||
						e.getBoundingClientRect().left -
							Qe(e, { marginLeft: 0 }, function () {
								return e.getBoundingClientRect().left;
							})) + "px"
				);
		})),
		ke.each({ margin: "", padding: "", border: "Width" }, function (e, t) {
			(ke.cssHooks[e + t] = {
				expand: function (n) {
					for (
						var i = 0, o = {}, r = "string" == typeof n ? n.split(" ") : [n];
						i < 4;
						i++
					)
						o[e + Ue[i] + t] = r[i] || r[i - 2] || r[0];
					return o;
				},
			}),
				"margin" !== e && (ke.cssHooks[e + t].set = P);
		}),
		ke.fn.extend({
			css: function (e, t) {
				return He(
					this,
					function (e, t, n) {
						var i,
							o,
							r = {},
							s = 0;
						if (Array.isArray(t)) {
							for (i = ct(e), o = t.length; s < o; s++)
								r[t[s]] = ke.css(e, t[s], !1, i);
							return r;
						}
						return void 0 !== n ? ke.style(e, t, n) : ke.css(e, t);
					},
					e,
					t,
					arguments.length > 1
				);
			},
		}),
		(ke.Tween = R),
		(R.prototype = {
			constructor: R,
			init: function (e, t, n, i, o, r) {
				(this.elem = e),
					(this.prop = n),
					(this.easing = o || ke.easing._default),
					(this.options = t),
					(this.start = this.now = this.cur()),
					(this.end = i),
					(this.unit = r || (ke.cssNumber[n] ? "" : "px"));
			},
			cur: function () {
				var e = R.propHooks[this.prop];
				return e && e.get ? e.get(this) : R.propHooks._default.get(this);
			},
			run: function (e) {
				var t,
					n = R.propHooks[this.prop];
				return (
					this.options.duration
						? (this.pos = t = ke.easing[this.easing](
								e,
								this.options.duration * e,
								0,
								1,
								this.options.duration
						  ))
						: (this.pos = t = e),
					(this.now = (this.end - this.start) * t + this.start),
					this.options.step &&
						this.options.step.call(this.elem, this.now, this),
					n && n.set ? n.set(this) : R.propHooks._default.set(this),
					this
				);
			},
		}),
		(R.prototype.init.prototype = R.prototype),
		(R.propHooks = {
			_default: {
				get: function (e) {
					var t;
					return 1 !== e.elem.nodeType ||
						(null != e.elem[e.prop] && null == e.elem.style[e.prop])
						? e.elem[e.prop]
						: (t = ke.css(e.elem, e.prop, "")) && "auto" !== t
						? t
						: 0;
				},
				set: function (e) {
					ke.fx.step[e.prop]
						? ke.fx.step[e.prop](e)
						: 1 !== e.elem.nodeType ||
						  (null == e.elem.style[ke.cssProps[e.prop]] &&
								!ke.cssHooks[e.prop])
						? (e.elem[e.prop] = e.now)
						: ke.style(e.elem, e.prop, e.now + e.unit);
				},
			},
		}),
		(R.propHooks.scrollTop = R.propHooks.scrollLeft = {
			set: function (e) {
				e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now);
			},
		}),
		(ke.easing = {
			linear: function (e) {
				return e;
			},
			swing: function (e) {
				return 0.5 - Math.cos(e * Math.PI) / 2;
			},
			_default: "swing",
		}),
		(ke.fx = R.prototype.init),
		(ke.fx.step = {});
	var yt,
		mt,
		bt = /^(?:toggle|show|hide)$/,
		wt = /queueHooks$/;
	(ke.Animation = ke.extend(X, {
		tweeners: {
			"*": [
				function (e, t) {
					var n = this.createTween(e, t);
					return m(n.elem, e, We.exec(t), n), n;
				},
			],
		},
		tweener: function (e, t) {
			me(e) ? ((t = e), (e = ["*"])) : (e = e.match(Le));
			for (var n, i = 0, o = e.length; i < o; i++)
				(n = e[i]),
					(X.tweeners[n] = X.tweeners[n] || []),
					X.tweeners[n].unshift(t);
		},
		prefilters: [Q],
		prefilter: function (e, t) {
			t ? X.prefilters.unshift(e) : X.prefilters.push(e);
		},
	})),
		(ke.speed = function (e, t, n) {
			var i =
				e && "object" == typeof e
					? ke.extend({}, e)
					: {
							complete: n || (!n && t) || (me(e) && e),
							duration: e,
							easing: (n && t) || (t && !me(t) && t),
					  };
			return (
				ke.fx.off
					? (i.duration = 0)
					: "number" != typeof i.duration &&
					  (i.duration in ke.fx.speeds
							? (i.duration = ke.fx.speeds[i.duration])
							: (i.duration = ke.fx.speeds._default)),
				(null != i.queue && !0 !== i.queue) || (i.queue = "fx"),
				(i.old = i.complete),
				(i.complete = function () {
					me(i.old) && i.old.call(this), i.queue && ke.dequeue(this, i.queue);
				}),
				i
			);
		}),
		ke.fn.extend({
			fadeTo: function (e, t, n, i) {
				return this.filter(Ke)
					.css("opacity", 0)
					.show()
					.end()
					.animate({ opacity: t }, e, n, i);
			},
			animate: function (e, t, n, i) {
				var o = ke.isEmptyObject(e),
					r = ke.speed(t, n, i),
					s = function () {
						var t = X(this, ke.extend({}, e), r);
						(o || Pe.get(this, "finish")) && t.stop(!0);
					};
				return (
					(s.finish = s),
					o || !1 === r.queue ? this.each(s) : this.queue(r.queue, s)
				);
			},
			stop: function (e, t, n) {
				var i = function (e) {
					var t = e.stop;
					delete e.stop, t(n);
				};
				return (
					"string" != typeof e && ((n = t), (t = e), (e = void 0)),
					t && !1 !== e && this.queue(e || "fx", []),
					this.each(function () {
						var t = !0,
							o = null != e && e + "queueHooks",
							r = ke.timers,
							s = Pe.get(this);
						if (o) s[o] && s[o].stop && i(s[o]);
						else for (o in s) s[o] && s[o].stop && wt.test(o) && i(s[o]);
						for (o = r.length; o--; )
							r[o].elem !== this ||
								(null != e && r[o].queue !== e) ||
								(r[o].anim.stop(n), (t = !1), r.splice(o, 1));
						(!t && n) || ke.dequeue(this, e);
					})
				);
			},
			finish: function (e) {
				return (
					!1 !== e && (e = e || "fx"),
					this.each(function () {
						var t,
							n = Pe.get(this),
							i = n[e + "queue"],
							o = n[e + "queueHooks"],
							r = ke.timers,
							s = i ? i.length : 0;
						for (
							n.finish = !0,
								ke.queue(this, e, []),
								o && o.stop && o.stop.call(this, !0),
								t = r.length;
							t--;

						)
							r[t].elem === this &&
								r[t].queue === e &&
								(r[t].anim.stop(!0), r.splice(t, 1));
						for (t = 0; t < s; t++)
							i[t] && i[t].finish && i[t].finish.call(this);
						delete n.finish;
					})
				);
			},
		}),
		ke.each(["toggle", "show", "hide"], function (e, t) {
			var n = ke.fn[t];
			ke.fn[t] = function (e, i, o) {
				return null == e || "boolean" == typeof e
					? n.apply(this, arguments)
					: this.animate(U(t, !0), e, i, o);
			};
		}),
		ke.each(
			{
				slideDown: U("show"),
				slideUp: U("hide"),
				slideToggle: U("toggle"),
				fadeIn: { opacity: "show" },
				fadeOut: { opacity: "hide" },
				fadeToggle: { opacity: "toggle" },
			},
			function (e, t) {
				ke.fn[e] = function (e, n, i) {
					return this.animate(t, e, n, i);
				};
			}
		),
		(ke.timers = []),
		(ke.fx.tick = function () {
			var e,
				t = 0,
				n = ke.timers;
			for (yt = Date.now(); t < n.length; t++)
				(e = n[t])() || n[t] !== e || n.splice(t--, 1);
			n.length || ke.fx.stop(), (yt = void 0);
		}),
		(ke.fx.timer = function (e) {
			ke.timers.push(e), ke.fx.start();
		}),
		(ke.fx.interval = 13),
		(ke.fx.start = function () {
			mt || ((mt = !0), F());
		}),
		(ke.fx.stop = function () {
			mt = null;
		}),
		(ke.fx.speeds = { slow: 600, fast: 200, _default: 400 }),
		(ke.fn.delay = function (t, n) {
			return (
				(t = (ke.fx && ke.fx.speeds[t]) || t),
				(n = n || "fx"),
				this.queue(n, function (n, i) {
					var o = e.setTimeout(n, t);
					i.stop = function () {
						e.clearTimeout(o);
					};
				})
			);
		}),
		(function () {
			var e = se.createElement("input"),
				t = se.createElement("select").appendChild(se.createElement("option"));
			(e.type = "checkbox"),
				(ye.checkOn = "" !== e.value),
				(ye.optSelected = t.selected),
				((e = se.createElement("input")).value = "t"),
				(e.type = "radio"),
				(ye.radioValue = "t" === e.value);
		})();
	var kt,
		xt = ke.expr.attrHandle;
	ke.fn.extend({
		attr: function (e, t) {
			return He(this, ke.attr, e, t, arguments.length > 1);
		},
		removeAttr: function (e) {
			return this.each(function () {
				ke.removeAttr(this, e);
			});
		},
	}),
		ke.extend({
			attr: function (e, t, n) {
				var i,
					o,
					r = e.nodeType;
				if (3 !== r && 8 !== r && 2 !== r)
					return "undefined" == typeof e.getAttribute
						? ke.prop(e, t, n)
						: ((1 === r && ke.isXMLDoc(e)) ||
								(o =
									ke.attrHooks[t.toLowerCase()] ||
									(ke.expr.match.bool.test(t) ? kt : void 0)),
						  void 0 !== n
								? null === n
									? void ke.removeAttr(e, t)
									: o && "set" in o && void 0 !== (i = o.set(e, n, t))
									? i
									: (e.setAttribute(t, n + ""), n)
								: o && "get" in o && null !== (i = o.get(e, t))
								? i
								: null == (i = ke.find.attr(e, t))
								? void 0
								: i);
			},
			attrHooks: {
				type: {
					set: function (e, t) {
						if (!ye.radioValue && "radio" === t && r(e, "input")) {
							var n = e.value;
							return e.setAttribute("type", t), n && (e.value = n), t;
						}
					},
				},
			},
			removeAttr: function (e, t) {
				var n,
					i = 0,
					o = t && t.match(Le);
				if (o && 1 === e.nodeType) for (; (n = o[i++]); ) e.removeAttribute(n);
			},
		}),
		(kt = {
			set: function (e, t, n) {
				return !1 === t ? ke.removeAttr(e, n) : e.setAttribute(n, n), n;
			},
		}),
		ke.each(ke.expr.match.bool.source.match(/\w+/g), function (e, t) {
			var n = xt[t] || ke.find.attr;
			xt[t] = function (e, t, i) {
				var o,
					r,
					s = t.toLowerCase();
				return (
					i ||
						((r = xt[s]),
						(xt[s] = o),
						(o = null != n(e, t, i) ? s : null),
						(xt[s] = r)),
					o
				);
			};
		});
	var Tt = /^(?:input|select|textarea|button)$/i,
		St = /^(?:a|area)$/i;
	ke.fn.extend({
		prop: function (e, t) {
			return He(this, ke.prop, e, t, arguments.length > 1);
		},
		removeProp: function (e) {
			return this.each(function () {
				delete this[ke.propFix[e] || e];
			});
		},
	}),
		ke.extend({
			prop: function (e, t, n) {
				var i,
					o,
					r = e.nodeType;
				if (3 !== r && 8 !== r && 2 !== r)
					return (
						(1 === r && ke.isXMLDoc(e)) ||
							((t = ke.propFix[t] || t), (o = ke.propHooks[t])),
						void 0 !== n
							? o && "set" in o && void 0 !== (i = o.set(e, n, t))
								? i
								: (e[t] = n)
							: o && "get" in o && null !== (i = o.get(e, t))
							? i
							: e[t]
					);
			},
			propHooks: {
				tabIndex: {
					get: function (e) {
						var t = ke.find.attr(e, "tabindex");
						return t
							? parseInt(t, 10)
							: Tt.test(e.nodeName) || (St.test(e.nodeName) && e.href)
							? 0
							: -1;
					},
				},
			},
			propFix: { for: "htmlFor", class: "className" },
		}),
		ye.optSelected ||
			(ke.propHooks.selected = {
				get: function (e) {
					var t = e.parentNode;
					return t && t.parentNode && t.parentNode.selectedIndex, null;
				},
				set: function (e) {
					var t = e.parentNode;
					t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex);
				},
			}),
		ke.each(
			[
				"tabIndex",
				"readOnly",
				"maxLength",
				"cellSpacing",
				"cellPadding",
				"rowSpan",
				"colSpan",
				"useMap",
				"frameBorder",
				"contentEditable",
			],
			function () {
				ke.propFix[this.toLowerCase()] = this;
			}
		),
		ke.fn.extend({
			addClass: function (e) {
				var t,
					n,
					i,
					o,
					r,
					s,
					a,
					l = 0;
				if (me(e))
					return this.each(function (t) {
						ke(this).addClass(e.call(this, t, G(this)));
					});
				if ((t = J(e)).length)
					for (; (n = this[l++]); )
						if (((o = G(n)), (i = 1 === n.nodeType && " " + Y(o) + " "))) {
							for (s = 0; (r = t[s++]); )
								i.indexOf(" " + r + " ") < 0 && (i += r + " ");
							o !== (a = Y(i)) && n.setAttribute("class", a);
						}
				return this;
			},
			removeClass: function (e) {
				var t,
					n,
					i,
					o,
					r,
					s,
					a,
					l = 0;
				if (me(e))
					return this.each(function (t) {
						ke(this).removeClass(e.call(this, t, G(this)));
					});
				if (!arguments.length) return this.attr("class", "");
				if ((t = J(e)).length)
					for (; (n = this[l++]); )
						if (((o = G(n)), (i = 1 === n.nodeType && " " + Y(o) + " "))) {
							for (s = 0; (r = t[s++]); )
								for (; i.indexOf(" " + r + " ") > -1; )
									i = i.replace(" " + r + " ", " ");
							o !== (a = Y(i)) && n.setAttribute("class", a);
						}
				return this;
			},
			toggleClass: function (e, t) {
				var n = typeof e,
					i = "string" === n || Array.isArray(e);
				return "boolean" == typeof t && i
					? t
						? this.addClass(e)
						: this.removeClass(e)
					: me(e)
					? this.each(function (n) {
							ke(this).toggleClass(e.call(this, n, G(this), t), t);
					  })
					: this.each(function () {
							var t, o, r, s;
							if (i)
								for (o = 0, r = ke(this), s = J(e); (t = s[o++]); )
									r.hasClass(t) ? r.removeClass(t) : r.addClass(t);
							else
								(void 0 !== e && "boolean" !== n) ||
									((t = G(this)) && Pe.set(this, "__className__", t),
									this.setAttribute &&
										this.setAttribute(
											"class",
											t || !1 === e ? "" : Pe.get(this, "__className__") || ""
										));
					  });
			},
			hasClass: function (e) {
				var t,
					n,
					i = 0;
				for (t = " " + e + " "; (n = this[i++]); )
					if (1 === n.nodeType && (" " + Y(G(n)) + " ").indexOf(t) > -1)
						return !0;
				return !1;
			},
		});
	var Ct = /\r/g;
	ke.fn.extend({
		val: function (e) {
			var t,
				n,
				i,
				o = this[0];
			return arguments.length
				? ((i = me(e)),
				  this.each(function (n) {
						var o;
						1 === this.nodeType &&
							(null == (o = i ? e.call(this, n, ke(this).val()) : e)
								? (o = "")
								: "number" == typeof o
								? (o += "")
								: Array.isArray(o) &&
								  (o = ke.map(o, function (e) {
										return null == e ? "" : e + "";
								  })),
							((t =
								ke.valHooks[this.type] ||
								ke.valHooks[this.nodeName.toLowerCase()]) &&
								"set" in t &&
								void 0 !== t.set(this, o, "value")) ||
								(this.value = o));
				  }))
				: o
				? (t = ke.valHooks[o.type] || ke.valHooks[o.nodeName.toLowerCase()]) &&
				  "get" in t &&
				  void 0 !== (n = t.get(o, "value"))
					? n
					: "string" == typeof (n = o.value)
					? n.replace(Ct, "")
					: null == n
					? ""
					: n
				: void 0;
		},
	}),
		ke.extend({
			valHooks: {
				option: {
					get: function (e) {
						var t = ke.find.attr(e, "value");
						return null != t ? t : Y(ke.text(e));
					},
				},
				select: {
					get: function (e) {
						var t,
							n,
							i,
							o = e.options,
							s = e.selectedIndex,
							a = "select-one" === e.type,
							l = a ? null : [],
							c = a ? s + 1 : o.length;
						for (i = s < 0 ? c : a ? s : 0; i < c; i++)
							if (
								((n = o[i]).selected || i === s) &&
								!n.disabled &&
								(!n.parentNode.disabled || !r(n.parentNode, "optgroup"))
							) {
								if (((t = ke(n).val()), a)) return t;
								l.push(t);
							}
						return l;
					},
					set: function (e, t) {
						for (
							var n, i, o = e.options, r = ke.makeArray(t), s = o.length;
							s--;

						)
							((i = o[s]).selected =
								ke.inArray(ke.valHooks.option.get(i), r) > -1) && (n = !0);
						return n || (e.selectedIndex = -1), r;
					},
				},
			},
		}),
		ke.each(["radio", "checkbox"], function () {
			(ke.valHooks[this] = {
				set: function (e, t) {
					if (Array.isArray(t))
						return (e.checked = ke.inArray(ke(e).val(), t) > -1);
				},
			}),
				ye.checkOn ||
					(ke.valHooks[this].get = function (e) {
						return null === e.getAttribute("value") ? "on" : e.value;
					});
		}),
		(ye.focusin = "onfocusin" in e);
	var $t = /^(?:focusinfocus|focusoutblur)$/,
		At = function (e) {
			e.stopPropagation();
		};
	ke.extend(ke.event, {
		trigger: function (t, n, i, o) {
			var r,
				s,
				a,
				l,
				c,
				u,
				d,
				p,
				h = [i || se],
				f = fe.call(t, "type") ? t.type : t,
				g = fe.call(t, "namespace") ? t.namespace.split(".") : [];
			if (
				((s = p = a = i = i || se),
				3 !== i.nodeType &&
					8 !== i.nodeType &&
					!$t.test(f + ke.event.triggered) &&
					(f.indexOf(".") > -1 && ((f = (g = f.split(".")).shift()), g.sort()),
					(c = f.indexOf(":") < 0 && "on" + f),
					((t = t[ke.expando]
						? t
						: new ke.Event(f, "object" == typeof t && t)).isTrigger = o
						? 2
						: 3),
					(t.namespace = g.join(".")),
					(t.rnamespace = t.namespace
						? new RegExp("(^|\\.)" + g.join("\\.(?:.*\\.|)") + "(\\.|$)")
						: null),
					(t.result = void 0),
					t.target || (t.target = i),
					(n = null == n ? [t] : ke.makeArray(n, [t])),
					(d = ke.event.special[f] || {}),
					o || !d.trigger || !1 !== d.trigger.apply(i, n)))
			) {
				if (!o && !d.noBubble && !be(i)) {
					for (
						l = d.delegateType || f, $t.test(l + f) || (s = s.parentNode);
						s;
						s = s.parentNode
					)
						h.push(s), (a = s);
					a === (i.ownerDocument || se) &&
						h.push(a.defaultView || a.parentWindow || e);
				}
				for (r = 0; (s = h[r++]) && !t.isPropagationStopped(); )
					(p = s),
						(t.type = r > 1 ? l : d.bindType || f),
						(u = (Pe.get(s, "events") || {})[t.type] && Pe.get(s, "handle")) &&
							u.apply(s, n),
						(u = c && s[c]) &&
							u.apply &&
							Ie(s) &&
							((t.result = u.apply(s, n)),
							!1 === t.result && t.preventDefault());
				return (
					(t.type = f),
					o ||
						t.isDefaultPrevented() ||
						(d._default && !1 !== d._default.apply(h.pop(), n)) ||
						!Ie(i) ||
						(c &&
							me(i[f]) &&
							!be(i) &&
							((a = i[c]) && (i[c] = null),
							(ke.event.triggered = f),
							t.isPropagationStopped() && p.addEventListener(f, At),
							i[f](),
							t.isPropagationStopped() && p.removeEventListener(f, At),
							(ke.event.triggered = void 0),
							a && (i[c] = a))),
					t.result
				);
			}
		},
		simulate: function (e, t, n) {
			var i = ke.extend(new ke.Event(), n, { type: e, isSimulated: !0 });
			ke.event.trigger(i, null, t);
		},
	}),
		ke.fn.extend({
			trigger: function (e, t) {
				return this.each(function () {
					ke.event.trigger(e, t, this);
				});
			},
			triggerHandler: function (e, t) {
				var n = this[0];
				if (n) return ke.event.trigger(e, t, n, !0);
			},
		}),
		ye.focusin ||
			ke.each({ focus: "focusin", blur: "focusout" }, function (e, t) {
				var n = function (e) {
					ke.event.simulate(t, e.target, ke.event.fix(e));
				};
				ke.event.special[t] = {
					setup: function () {
						var i = this.ownerDocument || this,
							o = Pe.access(i, t);
						o || i.addEventListener(e, n, !0), Pe.access(i, t, (o || 0) + 1);
					},
					teardown: function () {
						var i = this.ownerDocument || this,
							o = Pe.access(i, t) - 1;
						o
							? Pe.access(i, t, o)
							: (i.removeEventListener(e, n, !0), Pe.remove(i, t));
					},
				};
			});
	var _t = e.location,
		Et = Date.now(),
		Dt = /\?/;
	ke.parseXML = function (t) {
		var n;
		if (!t || "string" != typeof t) return null;
		try {
			n = new e.DOMParser().parseFromString(t, "text/xml");
		} catch (e) {
			n = void 0;
		}
		return (
			(n && !n.getElementsByTagName("parsererror").length) ||
				ke.error("Invalid XML: " + t),
			n
		);
	};
	var jt = /\[\]$/,
		Lt = /\r?\n/g,
		qt = /^(?:submit|button|image|reset|file)$/i,
		Ot = /^(?:input|select|textarea|keygen)/i;
	(ke.param = function (e, t) {
		var n,
			i = [],
			o = function (e, t) {
				var n = me(t) ? t() : t;
				i[i.length] =
					encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n);
			};
		if (Array.isArray(e) || (e.jquery && !ke.isPlainObject(e)))
			ke.each(e, function () {
				o(this.name, this.value);
			});
		else for (n in e) Z(n, e[n], t, o);
		return i.join("&");
	}),
		ke.fn.extend({
			serialize: function () {
				return ke.param(this.serializeArray());
			},
			serializeArray: function () {
				return this.map(function () {
					var e = ke.prop(this, "elements");
					return e ? ke.makeArray(e) : this;
				})
					.filter(function () {
						var e = this.type;
						return (
							this.name &&
							!ke(this).is(":disabled") &&
							Ot.test(this.nodeName) &&
							!qt.test(e) &&
							(this.checked || !Xe.test(e))
						);
					})
					.map(function (e, t) {
						var n = ke(this).val();
						return null == n
							? null
							: Array.isArray(n)
							? ke.map(n, function (e) {
									return { name: t.name, value: e.replace(Lt, "\r\n") };
							  })
							: { name: t.name, value: n.replace(Lt, "\r\n") };
					})
					.get();
			},
		});
	var Ht = /%20/g,
		Nt = /#.*$/,
		zt = /([?&])_=[^&]*/,
		It = /^(.*?):[ \t]*([^\r\n]*)$/gm,
		Pt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
		Mt = /^(?:GET|HEAD)$/,
		Bt = /^\/\//,
		Rt = {},
		Ft = {},
		Wt = "*/".concat("*"),
		Ut = se.createElement("a");
	(Ut.href = _t.href),
		ke.extend({
			active: 0,
			lastModified: {},
			etag: {},
			ajaxSettings: {
				url: _t.href,
				type: "GET",
				isLocal: Pt.test(_t.protocol),
				global: !0,
				processData: !0,
				async: !0,
				contentType: "application/x-www-form-urlencoded; charset=UTF-8",
				accepts: {
					"*": Wt,
					text: "text/plain",
					html: "text/html",
					xml: "application/xml, text/xml",
					json: "application/json, text/javascript",
				},
				contents: { xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/ },
				responseFields: {
					xml: "responseXML",
					text: "responseText",
					json: "responseJSON",
				},
				converters: {
					"* text": String,
					"text html": !0,
					"text json": JSON.parse,
					"text xml": ke.parseXML,
				},
				flatOptions: { url: !0, context: !0 },
			},
			ajaxSetup: function (e, t) {
				return t ? ne(ne(e, ke.ajaxSettings), t) : ne(ke.ajaxSettings, e);
			},
			ajaxPrefilter: ee(Rt),
			ajaxTransport: ee(Ft),
			ajax: function (t, n) {
				function i(t, n, i, a) {
					var c,
						p,
						h,
						w,
						k,
						x = n;
					u ||
						((u = !0),
						l && e.clearTimeout(l),
						(o = void 0),
						(s = a || ""),
						(T.readyState = t > 0 ? 4 : 0),
						(c = (t >= 200 && t < 300) || 304 === t),
						i && (w = ie(f, T, i)),
						(w = oe(f, w, T, c)),
						c
							? (f.ifModified &&
									((k = T.getResponseHeader("Last-Modified")) &&
										(ke.lastModified[r] = k),
									(k = T.getResponseHeader("etag")) && (ke.etag[r] = k)),
							  204 === t || "HEAD" === f.type
									? (x = "nocontent")
									: 304 === t
									? (x = "notmodified")
									: ((x = w.state), (p = w.data), (c = !(h = w.error))))
							: ((h = x), (!t && x) || ((x = "error"), t < 0 && (t = 0))),
						(T.status = t),
						(T.statusText = (n || x) + ""),
						c ? y.resolveWith(g, [p, x, T]) : y.rejectWith(g, [T, x, h]),
						T.statusCode(b),
						(b = void 0),
						d && v.trigger(c ? "ajaxSuccess" : "ajaxError", [T, f, c ? p : h]),
						m.fireWith(g, [T, x]),
						d &&
							(v.trigger("ajaxComplete", [T, f]),
							--ke.active || ke.event.trigger("ajaxStop")));
				}
				"object" == typeof t && ((n = t), (t = void 0)), (n = n || {});
				var o,
					r,
					s,
					a,
					l,
					c,
					u,
					d,
					p,
					h,
					f = ke.ajaxSetup({}, n),
					g = f.context || f,
					v = f.context && (g.nodeType || g.jquery) ? ke(g) : ke.event,
					y = ke.Deferred(),
					m = ke.Callbacks("once memory"),
					b = f.statusCode || {},
					w = {},
					k = {},
					x = "canceled",
					T = {
						readyState: 0,
						getResponseHeader: function (e) {
							var t;
							if (u) {
								if (!a)
									for (a = {}; (t = It.exec(s)); ) a[t[1].toLowerCase()] = t[2];
								t = a[e.toLowerCase()];
							}
							return null == t ? null : t;
						},
						getAllResponseHeaders: function () {
							return u ? s : null;
						},
						setRequestHeader: function (e, t) {
							return (
								null == u &&
									((e = k[e.toLowerCase()] = k[e.toLowerCase()] || e),
									(w[e] = t)),
								this
							);
						},
						overrideMimeType: function (e) {
							return null == u && (f.mimeType = e), this;
						},
						statusCode: function (e) {
							var t;
							if (e)
								if (u) T.always(e[T.status]);
								else for (t in e) b[t] = [b[t], e[t]];
							return this;
						},
						abort: function (e) {
							var t = e || x;
							return o && o.abort(t), i(0, t), this;
						},
					};
				if (
					(y.promise(T),
					(f.url = ((t || f.url || _t.href) + "").replace(
						Bt,
						_t.protocol + "//"
					)),
					(f.type = n.method || n.type || f.method || f.type),
					(f.dataTypes = (f.dataType || "*").toLowerCase().match(Le) || [""]),
					null == f.crossDomain)
				) {
					c = se.createElement("a");
					try {
						(c.href = f.url),
							(c.href = c.href),
							(f.crossDomain =
								Ut.protocol + "//" + Ut.host != c.protocol + "//" + c.host);
					} catch (e) {
						f.crossDomain = !0;
					}
				}
				if (
					(f.data &&
						f.processData &&
						"string" != typeof f.data &&
						(f.data = ke.param(f.data, f.traditional)),
					te(Rt, f, n, T),
					u)
				)
					return T;
				for (p in ((d = ke.event && f.global) &&
					0 == ke.active++ &&
					ke.event.trigger("ajaxStart"),
				(f.type = f.type.toUpperCase()),
				(f.hasContent = !Mt.test(f.type)),
				(r = f.url.replace(Nt, "")),
				f.hasContent
					? f.data &&
					  f.processData &&
					  0 ===
							(f.contentType || "").indexOf(
								"application/x-www-form-urlencoded"
							) &&
					  (f.data = f.data.replace(Ht, "+"))
					: ((h = f.url.slice(r.length)),
					  f.data &&
							(f.processData || "string" == typeof f.data) &&
							((r += (Dt.test(r) ? "&" : "?") + f.data), delete f.data),
					  !1 === f.cache &&
							((r = r.replace(zt, "$1")),
							(h = (Dt.test(r) ? "&" : "?") + "_=" + Et++ + h)),
					  (f.url = r + h)),
				f.ifModified &&
					(ke.lastModified[r] &&
						T.setRequestHeader("If-Modified-Since", ke.lastModified[r]),
					ke.etag[r] && T.setRequestHeader("If-None-Match", ke.etag[r])),
				((f.data && f.hasContent && !1 !== f.contentType) || n.contentType) &&
					T.setRequestHeader("Content-Type", f.contentType),
				T.setRequestHeader(
					"Accept",
					f.dataTypes[0] && f.accepts[f.dataTypes[0]]
						? f.accepts[f.dataTypes[0]] +
								("*" !== f.dataTypes[0] ? ", " + Wt + "; q=0.01" : "")
						: f.accepts["*"]
				),
				f.headers))
					T.setRequestHeader(p, f.headers[p]);
				if (f.beforeSend && (!1 === f.beforeSend.call(g, T, f) || u))
					return T.abort();
				if (
					((x = "abort"),
					m.add(f.complete),
					T.done(f.success),
					T.fail(f.error),
					(o = te(Ft, f, n, T)))
				) {
					if (((T.readyState = 1), d && v.trigger("ajaxSend", [T, f]), u))
						return T;
					f.async &&
						f.timeout > 0 &&
						(l = e.setTimeout(function () {
							T.abort("timeout");
						}, f.timeout));
					try {
						(u = !1), o.send(w, i);
					} catch (e) {
						if (u) throw e;
						i(-1, e);
					}
				} else i(-1, "No Transport");
				return T;
			},
			getJSON: function (e, t, n) {
				return ke.get(e, t, n, "json");
			},
			getScript: function (e, t) {
				return ke.get(e, void 0, t, "script");
			},
		}),
		ke.each(["get", "post"], function (e, t) {
			ke[t] = function (e, n, i, o) {
				return (
					me(n) && ((o = o || i), (i = n), (n = void 0)),
					ke.ajax(
						ke.extend(
							{ url: e, type: t, dataType: o, data: n, success: i },
							ke.isPlainObject(e) && e
						)
					)
				);
			};
		}),
		(ke._evalUrl = function (e) {
			return ke.ajax({
				url: e,
				type: "GET",
				dataType: "script",
				cache: !0,
				async: !1,
				global: !1,
				throws: !0,
			});
		}),
		ke.fn.extend({
			wrapAll: function (e) {
				var t;
				return (
					this[0] &&
						(me(e) && (e = e.call(this[0])),
						(t = ke(e, this[0].ownerDocument).eq(0).clone(!0)),
						this[0].parentNode && t.insertBefore(this[0]),
						t
							.map(function () {
								for (var e = this; e.firstElementChild; )
									e = e.firstElementChild;
								return e;
							})
							.append(this)),
					this
				);
			},
			wrapInner: function (e) {
				return me(e)
					? this.each(function (t) {
							ke(this).wrapInner(e.call(this, t));
					  })
					: this.each(function () {
							var t = ke(this),
								n = t.contents();
							n.length ? n.wrapAll(e) : t.append(e);
					  });
			},
			wrap: function (e) {
				var t = me(e);
				return this.each(function (n) {
					ke(this).wrapAll(t ? e.call(this, n) : e);
				});
			},
			unwrap: function (e) {
				return (
					this.parent(e)
						.not("body")
						.each(function () {
							ke(this).replaceWith(this.childNodes);
						}),
					this
				);
			},
		}),
		(ke.expr.pseudos.hidden = function (e) {
			return !ke.expr.pseudos.visible(e);
		}),
		(ke.expr.pseudos.visible = function (e) {
			return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length);
		}),
		(ke.ajaxSettings.xhr = function () {
			try {
				return new e.XMLHttpRequest();
			} catch (e) {}
		});
	var Kt = { 0: 200, 1223: 204 },
		Qt = ke.ajaxSettings.xhr();
	(ye.cors = !!Qt && "withCredentials" in Qt),
		(ye.ajax = Qt = !!Qt),
		ke.ajaxTransport(function (t) {
			var n, i;
			if (ye.cors || (Qt && !t.crossDomain))
				return {
					send: function (o, r) {
						var s,
							a = t.xhr();
						if (
							(a.open(t.type, t.url, t.async, t.username, t.password),
							t.xhrFields)
						)
							for (s in t.xhrFields) a[s] = t.xhrFields[s];
						for (s in (t.mimeType &&
							a.overrideMimeType &&
							a.overrideMimeType(t.mimeType),
						t.crossDomain ||
							o["X-Requested-With"] ||
							(o["X-Requested-With"] = "XMLHttpRequest"),
						o))
							a.setRequestHeader(s, o[s]);
						(n = function (e) {
							return function () {
								n &&
									((n = i = a.onload = a.onerror = a.onabort = a.ontimeout = a.onreadystatechange = null),
									"abort" === e
										? a.abort()
										: "error" === e
										? "number" != typeof a.status
											? r(0, "error")
											: r(a.status, a.statusText)
										: r(
												Kt[a.status] || a.status,
												a.statusText,
												"text" !== (a.responseType || "text") ||
													"string" != typeof a.responseText
													? { binary: a.response }
													: { text: a.responseText },
												a.getAllResponseHeaders()
										  ));
							};
						}),
							(a.onload = n()),
							(i = a.onerror = a.ontimeout = n("error")),
							void 0 !== a.onabort
								? (a.onabort = i)
								: (a.onreadystatechange = function () {
										4 === a.readyState &&
											e.setTimeout(function () {
												n && i();
											});
								  }),
							(n = n("abort"));
						try {
							a.send((t.hasContent && t.data) || null);
						} catch (e) {
							if (n) throw e;
						}
					},
					abort: function () {
						n && n();
					},
				};
		}),
		ke.ajaxPrefilter(function (e) {
			e.crossDomain && (e.contents.script = !1);
		}),
		ke.ajaxSetup({
			accepts: {
				script:
					"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript",
			},
			contents: { script: /\b(?:java|ecma)script\b/ },
			converters: {
				"text script": function (e) {
					return ke.globalEval(e), e;
				},
			},
		}),
		ke.ajaxPrefilter("script", function (e) {
			void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET");
		}),
		ke.ajaxTransport("script", function (e) {
			var t, n;
			if (e.crossDomain)
				return {
					send: function (i, o) {
						(t = ke("<script>")
							.prop({ charset: e.scriptCharset, src: e.url })
							.on(
								"load error",
								(n = function (e) {
									t.remove(),
										(n = null),
										e && o("error" === e.type ? 404 : 200, e.type);
								})
							)),
							se.head.appendChild(t[0]);
					},
					abort: function () {
						n && n();
					},
				};
		});
	var Vt = [],
		Xt = /(=)\?(?=&|$)|\?\?/;
	ke.ajaxSetup({
		jsonp: "callback",
		jsonpCallback: function () {
			var e = Vt.pop() || ke.expando + "_" + Et++;
			return (this[e] = !0), e;
		},
	}),
		ke.ajaxPrefilter("json jsonp", function (t, n, i) {
			var o,
				r,
				s,
				a =
					!1 !== t.jsonp &&
					(Xt.test(t.url)
						? "url"
						: "string" == typeof t.data &&
						  0 ===
								(t.contentType || "").indexOf(
									"application/x-www-form-urlencoded"
								) &&
						  Xt.test(t.data) &&
						  "data");
			if (a || "jsonp" === t.dataTypes[0])
				return (
					(o = t.jsonpCallback = me(t.jsonpCallback)
						? t.jsonpCallback()
						: t.jsonpCallback),
					a
						? (t[a] = t[a].replace(Xt, "$1" + o))
						: !1 !== t.jsonp &&
						  (t.url += (Dt.test(t.url) ? "&" : "?") + t.jsonp + "=" + o),
					(t.converters["script json"] = function () {
						return s || ke.error(o + " was not called"), s[0];
					}),
					(t.dataTypes[0] = "json"),
					(r = e[o]),
					(e[o] = function () {
						s = arguments;
					}),
					i.always(function () {
						void 0 === r ? ke(e).removeProp(o) : (e[o] = r),
							t[o] && ((t.jsonpCallback = n.jsonpCallback), Vt.push(o)),
							s && me(r) && r(s[0]),
							(s = r = void 0);
					}),
					"script"
				);
		}),
		(ye.createHTMLDocument = (function () {
			var e = se.implementation.createHTMLDocument("").body;
			return (
				(e.innerHTML = "<form></form><form></form>"), 2 === e.childNodes.length
			);
		})()),
		(ke.parseHTML = function (e, t, n) {
			return "string" != typeof e
				? []
				: ("boolean" == typeof t && ((n = t), (t = !1)),
				  t ||
						(ye.createHTMLDocument
							? (((i = (t = se.implementation.createHTMLDocument(
									""
							  )).createElement("base")).href = se.location.href),
							  t.head.appendChild(i))
							: (t = se)),
				  (r = !n && []),
				  (o = Ae.exec(e))
						? [t.createElement(o[1])]
						: ((o = T([e], t, r)),
						  r && r.length && ke(r).remove(),
						  ke.merge([], o.childNodes)));
			var i, o, r;
		}),
		(ke.fn.load = function (e, t, n) {
			var i,
				o,
				r,
				s = this,
				a = e.indexOf(" ");
			return (
				a > -1 && ((i = Y(e.slice(a))), (e = e.slice(0, a))),
				me(t)
					? ((n = t), (t = void 0))
					: t && "object" == typeof t && (o = "POST"),
				s.length > 0 &&
					ke
						.ajax({ url: e, type: o || "GET", dataType: "html", data: t })
						.done(function (e) {
							(r = arguments),
								s.html(i ? ke("<div>").append(ke.parseHTML(e)).find(i) : e);
						})
						.always(
							n &&
								function (e, t) {
									s.each(function () {
										n.apply(this, r || [e.responseText, t, e]);
									});
								}
						),
				this
			);
		}),
		ke.each(
			[
				"ajaxStart",
				"ajaxStop",
				"ajaxComplete",
				"ajaxError",
				"ajaxSuccess",
				"ajaxSend",
			],
			function (e, t) {
				ke.fn[t] = function (e) {
					return this.on(t, e);
				};
			}
		),
		(ke.expr.pseudos.animated = function (e) {
			return ke.grep(ke.timers, function (t) {
				return e === t.elem;
			}).length;
		}),
		(ke.offset = {
			setOffset: function (e, t, n) {
				var i,
					o,
					r,
					s,
					a,
					l,
					c = ke.css(e, "position"),
					u = ke(e),
					d = {};
				"static" === c && (e.style.position = "relative"),
					(a = u.offset()),
					(r = ke.css(e, "top")),
					(l = ke.css(e, "left")),
					("absolute" === c || "fixed" === c) && (r + l).indexOf("auto") > -1
						? ((s = (i = u.position()).top), (o = i.left))
						: ((s = parseFloat(r) || 0), (o = parseFloat(l) || 0)),
					me(t) && (t = t.call(e, n, ke.extend({}, a))),
					null != t.top && (d.top = t.top - a.top + s),
					null != t.left && (d.left = t.left - a.left + o),
					"using" in t ? t.using.call(e, d) : u.css(d);
			},
		}),
		ke.fn.extend({
			offset: function (e) {
				if (arguments.length)
					return void 0 === e
						? this
						: this.each(function (t) {
								ke.offset.setOffset(this, e, t);
						  });
				var t,
					n,
					i = this[0];
				return i
					? i.getClientRects().length
						? ((t = i.getBoundingClientRect()),
						  (n = i.ownerDocument.defaultView),
						  { top: t.top + n.pageYOffset, left: t.left + n.pageXOffset })
						: { top: 0, left: 0 }
					: void 0;
			},
			position: function () {
				if (this[0]) {
					var e,
						t,
						n,
						i = this[0],
						o = { top: 0, left: 0 };
					if ("fixed" === ke.css(i, "position")) t = i.getBoundingClientRect();
					else {
						for (
							t = this.offset(),
								n = i.ownerDocument,
								e = i.offsetParent || n.documentElement;
							e &&
							(e === n.body || e === n.documentElement) &&
							"static" === ke.css(e, "position");

						)
							e = e.parentNode;
						e &&
							e !== i &&
							1 === e.nodeType &&
							(((o = ke(e).offset()).top += ke.css(e, "borderTopWidth", !0)),
							(o.left += ke.css(e, "borderLeftWidth", !0)));
					}
					return {
						top: t.top - o.top - ke.css(i, "marginTop", !0),
						left: t.left - o.left - ke.css(i, "marginLeft", !0),
					};
				}
			},
			offsetParent: function () {
				return this.map(function () {
					for (
						var e = this.offsetParent;
						e && "static" === ke.css(e, "position");

					)
						e = e.offsetParent;
					return e || et;
				});
			},
		}),
		ke.each(
			{ scrollLeft: "pageXOffset", scrollTop: "pageYOffset" },
			function (e, t) {
				var n = "pageYOffset" === t;
				ke.fn[e] = function (i) {
					return He(
						this,
						function (e, i, o) {
							var r;
							if (
								(be(e) ? (r = e) : 9 === e.nodeType && (r = e.defaultView),
								void 0 === o)
							)
								return r ? r[t] : e[i];
							r
								? r.scrollTo(n ? r.pageXOffset : o, n ? o : r.pageYOffset)
								: (e[i] = o);
						},
						e,
						i,
						arguments.length
					);
				};
			}
		),
		ke.each(["top", "left"], function (e, t) {
			ke.cssHooks[t] = N(ye.pixelPosition, function (e, n) {
				if (n)
					return (n = H(e, t)), lt.test(n) ? ke(e).position()[t] + "px" : n;
			});
		}),
		ke.each({ Height: "height", Width: "width" }, function (e, t) {
			ke.each(
				{ padding: "inner" + e, content: t, "": "outer" + e },
				function (n, i) {
					ke.fn[i] = function (o, r) {
						var s = arguments.length && (n || "boolean" != typeof o),
							a = n || (!0 === o || !0 === r ? "margin" : "border");
						return He(
							this,
							function (t, n, o) {
								var r;
								return be(t)
									? 0 === i.indexOf("outer")
										? t["inner" + e]
										: t.document.documentElement["client" + e]
									: 9 === t.nodeType
									? ((r = t.documentElement),
									  Math.max(
											t.body["scroll" + e],
											r["scroll" + e],
											t.body["offset" + e],
											r["offset" + e],
											r["client" + e]
									  ))
									: void 0 === o
									? ke.css(t, n, a)
									: ke.style(t, n, o, a);
							},
							t,
							s ? o : void 0,
							s
						);
					};
				}
			);
		}),
		ke.each(
			"blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(
				" "
			),
			function (e, t) {
				ke.fn[t] = function (e, n) {
					return arguments.length > 0
						? this.on(t, null, e, n)
						: this.trigger(t);
				};
			}
		),
		ke.fn.extend({
			hover: function (e, t) {
				return this.mouseenter(e).mouseleave(t || e);
			},
		}),
		ke.fn.extend({
			bind: function (e, t, n) {
				return this.on(e, null, t, n);
			},
			unbind: function (e, t) {
				return this.off(e, null, t);
			},
			delegate: function (e, t, n, i) {
				return this.on(t, e, n, i);
			},
			undelegate: function (e, t, n) {
				return 1 === arguments.length
					? this.off(e, "**")
					: this.off(t, e || "**", n);
			},
		}),
		(ke.proxy = function (e, t) {
			var n, i, o;
			if (("string" == typeof t && ((n = e[t]), (t = e), (e = n)), me(e)))
				return (
					(i = le.call(arguments, 2)),
					((o = function () {
						return e.apply(t || this, i.concat(le.call(arguments)));
					}).guid = e.guid = e.guid || ke.guid++),
					o
				);
		}),
		(ke.holdReady = function (e) {
			e ? ke.readyWait++ : ke.ready(!0);
		}),
		(ke.isArray = Array.isArray),
		(ke.parseJSON = JSON.parse),
		(ke.nodeName = r),
		(ke.isFunction = me),
		(ke.isWindow = be),
		(ke.camelCase = f),
		(ke.type = i),
		(ke.now = Date.now),
		(ke.isNumeric = function (e) {
			var t = ke.type(e);
			return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e));
		}),
		"function" == typeof define &&
			define.amd &&
			define("jquery", [], function () {
				return ke;
			});
	var Yt = e.jQuery,
		Gt = e.$;
	return (
		(ke.noConflict = function (t) {
			return (
				e.$ === ke && (e.$ = Gt), t && e.jQuery === ke && (e.jQuery = Yt), ke
			);
		}),
		t || (e.jQuery = e.$ = ke),
		ke
	);
}),
	(function (e) {
		"use strict";
		"function" == typeof define && define.amd
			? define(["jquery"], e)
			: "undefined" != typeof exports
			? (module.exports = e(require("jquery")))
			: e(jQuery);
	})(function (e) {
		"use strict";
		var t = window.Slick || {};
		((t = (function () {
			function t(t, i) {
				var o,
					r = this;
				(r.defaults = {
					accessibility: !0,
					adaptiveHeight: !1,
					appendArrows: e(t),
					appendDots: e(t),
					arrows: !0,
					asNavFor: null,
					prevArrow:
						'<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
					nextArrow:
						'<button class="slick-next" aria-label="Next" type="button">Next</button>',
					autoplay: !1,
					autoplaySpeed: 3e3,
					centerMode: !1,
					centerPadding: "50px",
					cssEase: "ease",
					customPaging: function (t, n) {
						return e('<button type="button" />').text(n + 1);
					},
					dots: !1,
					dotsClass: "slick-dots",
					draggable: !0,
					easing: "linear",
					edgeFriction: 0.35,
					fade: !1,
					focusOnSelect: !1,
					focusOnChange: !1,
					infinite: !0,
					initialSlide: 0,
					lazyLoad: "ondemand",
					mobileFirst: !1,
					pauseOnHover: !0,
					pauseOnFocus: !0,
					pauseOnDotsHover: !1,
					respondTo: "window",
					responsive: null,
					rows: 1,
					rtl: !1,
					slide: "",
					slidesPerRow: 1,
					slidesToShow: 1,
					slidesToScroll: 1,
					speed: 500,
					swipe: !0,
					swipeToSlide: !1,
					touchMove: !0,
					touchThreshold: 5,
					useCSS: !0,
					useTransform: !0,
					variableWidth: !1,
					vertical: !1,
					verticalSwiping: !1,
					waitForAnimate: !0,
					zIndex: 1e3,
				}),
					(r.initials = {
						animating: !1,
						dragging: !1,
						autoPlayTimer: null,
						currentDirection: 0,
						currentLeft: null,
						currentSlide: 0,
						direction: 1,
						$dots: null,
						listWidth: null,
						listHeight: null,
						loadIndex: 0,
						$nextArrow: null,
						$prevArrow: null,
						scrolling: !1,
						slideCount: null,
						slideWidth: null,
						$slideTrack: null,
						$slides: null,
						sliding: !1,
						slideOffset: 0,
						swipeLeft: null,
						swiping: !1,
						$list: null,
						touchObject: {},
						transformsEnabled: !1,
						unslicked: !1,
					}),
					e.extend(r, r.initials),
					(r.activeBreakpoint = null),
					(r.animType = null),
					(r.animProp = null),
					(r.breakpoints = []),
					(r.breakpointSettings = []),
					(r.cssTransitions = !1),
					(r.focussed = !1),
					(r.interrupted = !1),
					(r.hidden = "hidden"),
					(r.paused = !0),
					(r.positionProp = null),
					(r.respondTo = null),
					(r.rowCount = 1),
					(r.shouldClick = !0),
					(r.$slider = e(t)),
					(r.$slidesCache = null),
					(r.transformType = null),
					(r.transitionType = null),
					(r.visibilityChange = "visibilitychange"),
					(r.windowWidth = 0),
					(r.windowTimer = null),
					(o = e(t).data("slick") || {}),
					(r.options = e.extend({}, r.defaults, i, o)),
					(r.currentSlide = r.options.initialSlide),
					(r.originalSettings = r.options),
					"undefined" != typeof document.mozHidden
						? ((r.hidden = "mozHidden"),
						  (r.visibilityChange = "mozvisibilitychange"))
						: "undefined" != typeof document.webkitHidden &&
						  ((r.hidden = "webkitHidden"),
						  (r.visibilityChange = "webkitvisibilitychange")),
					(r.autoPlay = e.proxy(r.autoPlay, r)),
					(r.autoPlayClear = e.proxy(r.autoPlayClear, r)),
					(r.autoPlayIterator = e.proxy(r.autoPlayIterator, r)),
					(r.changeSlide = e.proxy(r.changeSlide, r)),
					(r.clickHandler = e.proxy(r.clickHandler, r)),
					(r.selectHandler = e.proxy(r.selectHandler, r)),
					(r.setPosition = e.proxy(r.setPosition, r)),
					(r.swipeHandler = e.proxy(r.swipeHandler, r)),
					(r.dragHandler = e.proxy(r.dragHandler, r)),
					(r.keyHandler = e.proxy(r.keyHandler, r)),
					(r.instanceUid = n++),
					(r.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/),
					r.registerBreakpoints(),
					r.init(!0);
			}
			var n = 0;
			return t;
		})()).prototype.activateADA = function () {
			this.$slideTrack
				.find(".slick-active")
				.attr({ "aria-hidden": "false" })
				.find("a, input, button, select")
				.attr({ tabindex: "0" });
		}),
			(t.prototype.addSlide = t.prototype.slickAdd = function (t, n, i) {
				var o = this;
				if ("boolean" == typeof n) (i = n), (n = null);
				else if (n < 0 || n >= o.slideCount) return !1;
				o.unload(),
					"number" == typeof n
						? 0 === n && 0 === o.$slides.length
							? e(t).appendTo(o.$slideTrack)
							: i
							? e(t).insertBefore(o.$slides.eq(n))
							: e(t).insertAfter(o.$slides.eq(n))
						: !0 === i
						? e(t).prependTo(o.$slideTrack)
						: e(t).appendTo(o.$slideTrack),
					(o.$slides = o.$slideTrack.children(this.options.slide)),
					o.$slideTrack.children(this.options.slide).detach(),
					o.$slideTrack.append(o.$slides),
					o.$slides.each(function (t, n) {
						e(n).attr("data-slick-index", t);
					}),
					(o.$slidesCache = o.$slides),
					o.reinit();
			}),
			(t.prototype.animateHeight = function () {
				var e = this;
				if (
					1 === e.options.slidesToShow &&
					!0 === e.options.adaptiveHeight &&
					!1 === e.options.vertical
				) {
					var t = e.$slides.eq(e.currentSlide).outerHeight(!0);
					e.$list.animate({ height: t }, e.options.speed);
				}
			}),
			(t.prototype.animateSlide = function (t, n) {
				var i = {},
					o = this;
				o.animateHeight(),
					!0 === o.options.rtl && !1 === o.options.vertical && (t = -t),
					!1 === o.transformsEnabled
						? !1 === o.options.vertical
							? o.$slideTrack.animate(
									{ left: t },
									o.options.speed,
									o.options.easing,
									n
							  )
							: o.$slideTrack.animate(
									{ top: t },
									o.options.speed,
									o.options.easing,
									n
							  )
						: !1 === o.cssTransitions
						? (!0 === o.options.rtl && (o.currentLeft = -o.currentLeft),
						  e({ animStart: o.currentLeft }).animate(
								{ animStart: t },
								{
									duration: o.options.speed,
									easing: o.options.easing,
									step: function (e) {
										(e = Math.ceil(e)),
											!1 === o.options.vertical
												? ((i[o.animType] = "translate(" + e + "px, 0px)"),
												  o.$slideTrack.css(i))
												: ((i[o.animType] = "translate(0px," + e + "px)"),
												  o.$slideTrack.css(i));
									},
									complete: function () {
										n && n.call();
									},
								}
						  ))
						: (o.applyTransition(),
						  (t = Math.ceil(t)),
						  !1 === o.options.vertical
								? (i[o.animType] = "translate3d(" + t + "px, 0px, 0px)")
								: (i[o.animType] = "translate3d(0px," + t + "px, 0px)"),
						  o.$slideTrack.css(i),
						  n &&
								setTimeout(function () {
									o.disableTransition(), n.call();
								}, o.options.speed));
			}),
			(t.prototype.getNavTarget = function () {
				var t = this,
					n = t.options.asNavFor;
				return n && null !== n && (n = e(n).not(t.$slider)), n;
			}),
			(t.prototype.asNavFor = function (t) {
				var n = this.getNavTarget();
				null !== n &&
					"object" == typeof n &&
					n.each(function () {
						var n = e(this).slick("getSlick");
						n.unslicked || n.slideHandler(t, !0);
					});
			}),
			(t.prototype.applyTransition = function (e) {
				var t = this,
					n = {};
				!1 === t.options.fade
					? (n[t.transitionType] =
							t.transformType +
							" " +
							t.options.speed +
							"ms " +
							t.options.cssEase)
					: (n[t.transitionType] =
							"opacity " + t.options.speed + "ms " + t.options.cssEase),
					!1 === t.options.fade ? t.$slideTrack.css(n) : t.$slides.eq(e).css(n);
			}),
			(t.prototype.autoPlay = function () {
				var e = this;
				e.autoPlayClear(),
					e.slideCount > e.options.slidesToShow &&
						(e.autoPlayTimer = setInterval(
							e.autoPlayIterator,
							e.options.autoplaySpeed
						));
			}),
			(t.prototype.autoPlayClear = function () {
				var e = this;
				e.autoPlayTimer && clearInterval(e.autoPlayTimer);
			}),
			(t.prototype.autoPlayIterator = function () {
				var e = this,
					t = e.currentSlide + e.options.slidesToScroll;
				e.paused ||
					e.interrupted ||
					e.focussed ||
					(!1 === e.options.infinite &&
						(1 === e.direction && e.currentSlide + 1 === e.slideCount - 1
							? (e.direction = 0)
							: 0 === e.direction &&
							  ((t = e.currentSlide - e.options.slidesToScroll),
							  e.currentSlide - 1 == 0 && (e.direction = 1))),
					e.slideHandler(t));
			}),
			(t.prototype.buildArrows = function () {
				var t = this;
				!0 === t.options.arrows &&
					((t.$prevArrow = e(t.options.prevArrow).addClass("slick-arrow")),
					(t.$nextArrow = e(t.options.nextArrow).addClass("slick-arrow")),
					t.slideCount > t.options.slidesToShow
						? (t.$prevArrow
								.removeClass("slick-hidden")
								.removeAttr("aria-hidden tabindex"),
						  t.$nextArrow
								.removeClass("slick-hidden")
								.removeAttr("aria-hidden tabindex"),
						  t.htmlExpr.test(t.options.prevArrow) &&
								t.$prevArrow.prependTo(t.options.appendArrows),
						  t.htmlExpr.test(t.options.nextArrow) &&
								t.$nextArrow.appendTo(t.options.appendArrows),
						  !0 !== t.options.infinite &&
								t.$prevArrow
									.addClass("slick-disabled")
									.attr("aria-disabled", "true"))
						: t.$prevArrow
								.add(t.$nextArrow)
								.addClass("slick-hidden")
								.attr({ "aria-disabled": "true", tabindex: "-1" }));
			}),
			(t.prototype.buildDots = function () {
				var t,
					n,
					i = this;
				if (!0 === i.options.dots && i.slideCount > i.options.slidesToShow) {
					for (
						i.$slider.addClass("slick-dotted"),
							n = e("<ul />").addClass(i.options.dotsClass),
							t = 0;
						t <= i.getDotCount();
						t += 1
					)
						n.append(
							e("<li />").append(i.options.customPaging.call(this, i, t))
						);
					(i.$dots = n.appendTo(i.options.appendDots)),
						i.$dots.find("li").first().addClass("slick-active");
				}
			}),
			(t.prototype.buildOut = function () {
				var t = this;
				(t.$slides = t.$slider
					.children(t.options.slide + ":not(.slick-cloned)")
					.addClass("slick-slide")),
					(t.slideCount = t.$slides.length),
					t.$slides.each(function (t, n) {
						e(n)
							.attr("data-slick-index", t)
							.data("originalStyling", e(n).attr("style") || "");
					}),
					t.$slider.addClass("slick-slider"),
					(t.$slideTrack =
						0 === t.slideCount
							? e('<div class="slick-track"/>').appendTo(t.$slider)
							: t.$slides.wrapAll('<div class="slick-track"/>').parent()),
					(t.$list = t.$slideTrack.wrap('<div class="slick-list"/>').parent()),
					t.$slideTrack.css("opacity", 0),
					(!0 !== t.options.centerMode && !0 !== t.options.swipeToSlide) ||
						(t.options.slidesToScroll = 1),
					e("img[data-lazy]", t.$slider).not("[src]").addClass("slick-loading"),
					t.setupInfinite(),
					t.buildArrows(),
					t.buildDots(),
					t.updateDots(),
					t.setSlideClasses(
						"number" == typeof t.currentSlide ? t.currentSlide : 0
					),
					!0 === t.options.draggable && t.$list.addClass("draggable");
			}),
			(t.prototype.buildRows = function () {
				var e,
					t,
					n,
					i,
					o,
					r,
					s,
					a = this;
				if (
					((i = document.createDocumentFragment()),
					(r = a.$slider.children()),
					a.options.rows > 0)
				) {
					for (
						s = a.options.slidesPerRow * a.options.rows,
							o = Math.ceil(r.length / s),
							e = 0;
						e < o;
						e++
					) {
						var l = document.createElement("div");
						for (t = 0; t < a.options.rows; t++) {
							var c = document.createElement("div");
							for (n = 0; n < a.options.slidesPerRow; n++) {
								var u = e * s + (t * a.options.slidesPerRow + n);
								r.get(u) && c.appendChild(r.get(u));
							}
							l.appendChild(c);
						}
						i.appendChild(l);
					}
					a.$slider.empty().append(i),
						a.$slider
							.children()
							.children()
							.children()
							.css({
								width: 100 / a.options.slidesPerRow + "%",
								display: "inline-block",
							});
				}
			}),
			(t.prototype.checkResponsive = function (t, n) {
				var i,
					o,
					r,
					s = this,
					a = !1,
					l = s.$slider.width(),
					c = window.innerWidth || e(window).width();
				if (
					("window" === s.respondTo
						? (r = c)
						: "slider" === s.respondTo
						? (r = l)
						: "min" === s.respondTo && (r = Math.min(c, l)),
					s.options.responsive &&
						s.options.responsive.length &&
						null !== s.options.responsive)
				) {
					for (i in ((o = null), s.breakpoints))
						s.breakpoints.hasOwnProperty(i) &&
							(!1 === s.originalSettings.mobileFirst
								? r < s.breakpoints[i] && (o = s.breakpoints[i])
								: r > s.breakpoints[i] && (o = s.breakpoints[i]));
					null !== o
						? null !== s.activeBreakpoint
							? (o !== s.activeBreakpoint || n) &&
							  ((s.activeBreakpoint = o),
							  "unslick" === s.breakpointSettings[o]
									? s.unslick(o)
									: ((s.options = e.extend(
											{},
											s.originalSettings,
											s.breakpointSettings[o]
									  )),
									  !0 === t && (s.currentSlide = s.options.initialSlide),
									  s.refresh(t)),
							  (a = o))
							: ((s.activeBreakpoint = o),
							  "unslick" === s.breakpointSettings[o]
									? s.unslick(o)
									: ((s.options = e.extend(
											{},
											s.originalSettings,
											s.breakpointSettings[o]
									  )),
									  !0 === t && (s.currentSlide = s.options.initialSlide),
									  s.refresh(t)),
							  (a = o))
						: null !== s.activeBreakpoint &&
						  ((s.activeBreakpoint = null),
						  (s.options = s.originalSettings),
						  !0 === t && (s.currentSlide = s.options.initialSlide),
						  s.refresh(t),
						  (a = o)),
						t || !1 === a || s.$slider.trigger("breakpoint", [s, a]);
				}
			}),
			(t.prototype.changeSlide = function (t, n) {
				var i,
					o,
					r = this,
					s = e(t.currentTarget);
				switch (
					(s.is("a") && t.preventDefault(),
					s.is("li") || (s = s.closest("li")),
					(i =
						r.slideCount % r.options.slidesToScroll != 0
							? 0
							: (r.slideCount - r.currentSlide) % r.options.slidesToScroll),
					t.data.message)
				) {
					case "previous":
						(o =
							0 === i ? r.options.slidesToScroll : r.options.slidesToShow - i),
							r.slideCount > r.options.slidesToShow &&
								r.slideHandler(r.currentSlide - o, !1, n);
						break;
					case "next":
						(o = 0 === i ? r.options.slidesToScroll : i),
							r.slideCount > r.options.slidesToShow &&
								r.slideHandler(r.currentSlide + o, !1, n);
						break;
					case "index":
						var a =
							0 === t.data.index
								? 0
								: t.data.index || s.index() * r.options.slidesToScroll;
						r.slideHandler(r.checkNavigable(a), !1, n),
							s.children().trigger("focus");
						break;
					default:
						return;
				}
			}),
			(t.prototype.checkNavigable = function (e) {
				var t, n;
				if (((n = 0), e > (t = this.getNavigableIndexes())[t.length - 1]))
					e = t[t.length - 1];
				else
					for (var i in t) {
						if (e < t[i]) {
							e = n;
							break;
						}
						n = t[i];
					}
				return e;
			}),
			(t.prototype.cleanUpEvents = function () {
				var t = this;
				t.options.dots &&
					null !== t.$dots &&
					(e("li", t.$dots)
						.off("click.slick", t.changeSlide)
						.off("mouseenter.slick", e.proxy(t.interrupt, t, !0))
						.off("mouseleave.slick", e.proxy(t.interrupt, t, !1)),
					!0 === t.options.accessibility &&
						t.$dots.off("keydown.slick", t.keyHandler)),
					t.$slider.off("focus.slick blur.slick"),
					!0 === t.options.arrows &&
						t.slideCount > t.options.slidesToShow &&
						(t.$prevArrow && t.$prevArrow.off("click.slick", t.changeSlide),
						t.$nextArrow && t.$nextArrow.off("click.slick", t.changeSlide),
						!0 === t.options.accessibility &&
							(t.$prevArrow && t.$prevArrow.off("keydown.slick", t.keyHandler),
							t.$nextArrow && t.$nextArrow.off("keydown.slick", t.keyHandler))),
					t.$list.off("touchstart.slick mousedown.slick", t.swipeHandler),
					t.$list.off("touchmove.slick mousemove.slick", t.swipeHandler),
					t.$list.off("touchend.slick mouseup.slick", t.swipeHandler),
					t.$list.off("touchcancel.slick mouseleave.slick", t.swipeHandler),
					t.$list.off("click.slick", t.clickHandler),
					e(document).off(t.visibilityChange, t.visibility),
					t.cleanUpSlideEvents(),
					!0 === t.options.accessibility &&
						t.$list.off("keydown.slick", t.keyHandler),
					!0 === t.options.focusOnSelect &&
						e(t.$slideTrack).children().off("click.slick", t.selectHandler),
					e(window).off(
						"orientationchange.slick.slick-" + t.instanceUid,
						t.orientationChange
					),
					e(window).off("resize.slick.slick-" + t.instanceUid, t.resize),
					e("[draggable!=true]", t.$slideTrack).off(
						"dragstart",
						t.preventDefault
					),
					e(window).off("load.slick.slick-" + t.instanceUid, t.setPosition);
			}),
			(t.prototype.cleanUpSlideEvents = function () {
				var t = this;
				t.$list.off("mouseenter.slick", e.proxy(t.interrupt, t, !0)),
					t.$list.off("mouseleave.slick", e.proxy(t.interrupt, t, !1));
			}),
			(t.prototype.cleanUpRows = function () {
				var e,
					t = this;
				t.options.rows > 0 &&
					((e = t.$slides.children().children()).removeAttr("style"),
					t.$slider.empty().append(e));
			}),
			(t.prototype.clickHandler = function (e) {
				!1 === this.shouldClick &&
					(e.stopImmediatePropagation(),
					e.stopPropagation(),
					e.preventDefault());
			}),
			(t.prototype.destroy = function (t) {
				var n = this;
				n.autoPlayClear(),
					(n.touchObject = {}),
					n.cleanUpEvents(),
					e(".slick-cloned", n.$slider).detach(),
					n.$dots && n.$dots.remove(),
					n.$prevArrow &&
						n.$prevArrow.length &&
						(n.$prevArrow
							.removeClass("slick-disabled slick-arrow slick-hidden")
							.removeAttr("aria-hidden aria-disabled tabindex")
							.css("display", ""),
						n.htmlExpr.test(n.options.prevArrow) && n.$prevArrow.remove()),
					n.$nextArrow &&
						n.$nextArrow.length &&
						(n.$nextArrow
							.removeClass("slick-disabled slick-arrow slick-hidden")
							.removeAttr("aria-hidden aria-disabled tabindex")
							.css("display", ""),
						n.htmlExpr.test(n.options.nextArrow) && n.$nextArrow.remove()),
					n.$slides &&
						(n.$slides
							.removeClass(
								"slick-slide slick-active slick-center slick-visible slick-current"
							)
							.removeAttr("aria-hidden")
							.removeAttr("data-slick-index")
							.each(function () {
								e(this).attr("style", e(this).data("originalStyling"));
							}),
						n.$slideTrack.children(this.options.slide).detach(),
						n.$slideTrack.detach(),
						n.$list.detach(),
						n.$slider.append(n.$slides)),
					n.cleanUpRows(),
					n.$slider.removeClass("slick-slider"),
					n.$slider.removeClass("slick-initialized"),
					n.$slider.removeClass("slick-dotted"),
					(n.unslicked = !0),
					t || n.$slider.trigger("destroy", [n]);
			}),
			(t.prototype.disableTransition = function (e) {
				var t = this,
					n = {};
				(n[t.transitionType] = ""),
					!1 === t.options.fade ? t.$slideTrack.css(n) : t.$slides.eq(e).css(n);
			}),
			(t.prototype.fadeSlide = function (e, t) {
				var n = this;
				!1 === n.cssTransitions
					? (n.$slides.eq(e).css({ zIndex: n.options.zIndex }),
					  n.$slides
							.eq(e)
							.animate({ opacity: 1 }, n.options.speed, n.options.easing, t))
					: (n.applyTransition(e),
					  n.$slides.eq(e).css({ opacity: 1, zIndex: n.options.zIndex }),
					  t &&
							setTimeout(function () {
								n.disableTransition(e), t.call();
							}, n.options.speed));
			}),
			(t.prototype.fadeSlideOut = function (e) {
				var t = this;
				!1 === t.cssTransitions
					? t.$slides
							.eq(e)
							.animate(
								{ opacity: 0, zIndex: t.options.zIndex - 2 },
								t.options.speed,
								t.options.easing
							)
					: (t.applyTransition(e),
					  t.$slides.eq(e).css({ opacity: 0, zIndex: t.options.zIndex - 2 }));
			}),
			(t.prototype.filterSlides = t.prototype.slickFilter = function (e) {
				var t = this;
				null !== e &&
					((t.$slidesCache = t.$slides),
					t.unload(),
					t.$slideTrack.children(this.options.slide).detach(),
					t.$slidesCache.filter(e).appendTo(t.$slideTrack),
					t.reinit());
			}),
			(t.prototype.focusHandler = function () {
				var t = this;
				t.$slider
					.off("focus.slick blur.slick")
					.on("focus.slick", "*", function () {
						var n = e(this);
						setTimeout(function () {
							t.options.pauseOnFocus &&
								n.is(":focus") &&
								((t.focussed = !0), t.autoPlay());
						}, 0);
					})
					.on("blur.slick", "*", function () {
						e(this),
							t.options.pauseOnFocus && ((t.focussed = !1), t.autoPlay());
					});
			}),
			(t.prototype.getCurrent = t.prototype.slickCurrentSlide = function () {
				return this.currentSlide;
			}),
			(t.prototype.getDotCount = function () {
				var e = this,
					t = 0,
					n = 0,
					i = 0;
				if (!0 === e.options.infinite)
					if (e.slideCount <= e.options.slidesToShow) ++i;
					else
						for (; t < e.slideCount; )
							++i,
								(t = n + e.options.slidesToScroll),
								(n +=
									e.options.slidesToScroll <= e.options.slidesToShow
										? e.options.slidesToScroll
										: e.options.slidesToShow);
				else if (!0 === e.options.centerMode) i = e.slideCount;
				else if (e.options.asNavFor)
					for (; t < e.slideCount; )
						++i,
							(t = n + e.options.slidesToScroll),
							(n +=
								e.options.slidesToScroll <= e.options.slidesToShow
									? e.options.slidesToScroll
									: e.options.slidesToShow);
				else
					i =
						1 +
						Math.ceil(
							(e.slideCount - e.options.slidesToShow) / e.options.slidesToScroll
						);
				return i - 1;
			}),
			(t.prototype.getLeft = function (e) {
				var t,
					n,
					i,
					o,
					r = this,
					s = 0;
				return (
					(r.slideOffset = 0),
					(n = r.$slides.first().outerHeight(!0)),
					!0 === r.options.infinite
						? (r.slideCount > r.options.slidesToShow &&
								((r.slideOffset = r.slideWidth * r.options.slidesToShow * -1),
								(o = -1),
								!0 === r.options.vertical &&
									!0 === r.options.centerMode &&
									(2 === r.options.slidesToShow
										? (o = -1.5)
										: 1 === r.options.slidesToShow && (o = -2)),
								(s = n * r.options.slidesToShow * o)),
						  r.slideCount % r.options.slidesToScroll != 0 &&
								e + r.options.slidesToScroll > r.slideCount &&
								r.slideCount > r.options.slidesToShow &&
								(e > r.slideCount
									? ((r.slideOffset =
											(r.options.slidesToShow - (e - r.slideCount)) *
											r.slideWidth *
											-1),
									  (s =
											(r.options.slidesToShow - (e - r.slideCount)) * n * -1))
									: ((r.slideOffset =
											(r.slideCount % r.options.slidesToScroll) *
											r.slideWidth *
											-1),
									  (s = (r.slideCount % r.options.slidesToScroll) * n * -1))))
						: e + r.options.slidesToShow > r.slideCount &&
						  ((r.slideOffset =
								(e + r.options.slidesToShow - r.slideCount) * r.slideWidth),
						  (s = (e + r.options.slidesToShow - r.slideCount) * n)),
					r.slideCount <= r.options.slidesToShow &&
						((r.slideOffset = 0), (s = 0)),
					!0 === r.options.centerMode && r.slideCount <= r.options.slidesToShow
						? (r.slideOffset =
								(r.slideWidth * Math.floor(r.options.slidesToShow)) / 2 -
								(r.slideWidth * r.slideCount) / 2)
						: !0 === r.options.centerMode && !0 === r.options.infinite
						? (r.slideOffset +=
								r.slideWidth * Math.floor(r.options.slidesToShow / 2) -
								r.slideWidth)
						: !0 === r.options.centerMode &&
						  ((r.slideOffset = 0),
						  (r.slideOffset +=
								r.slideWidth * Math.floor(r.options.slidesToShow / 2))),
					(t =
						!1 === r.options.vertical
							? e * r.slideWidth * -1 + r.slideOffset
							: e * n * -1 + s),
					!0 === r.options.variableWidth &&
						((i =
							r.slideCount <= r.options.slidesToShow ||
							!1 === r.options.infinite
								? r.$slideTrack.children(".slick-slide").eq(e)
								: r.$slideTrack
										.children(".slick-slide")
										.eq(e + r.options.slidesToShow)),
						(t =
							!0 === r.options.rtl
								? i[0]
									? -1 * (r.$slideTrack.width() - i[0].offsetLeft - i.width())
									: 0
								: i[0]
								? -1 * i[0].offsetLeft
								: 0),
						!0 === r.options.centerMode &&
							((i =
								r.slideCount <= r.options.slidesToShow ||
								!1 === r.options.infinite
									? r.$slideTrack.children(".slick-slide").eq(e)
									: r.$slideTrack
											.children(".slick-slide")
											.eq(e + r.options.slidesToShow + 1)),
							(t =
								!0 === r.options.rtl
									? i[0]
										? -1 * (r.$slideTrack.width() - i[0].offsetLeft - i.width())
										: 0
									: i[0]
									? -1 * i[0].offsetLeft
									: 0),
							(t += (r.$list.width() - i.outerWidth()) / 2))),
					t
				);
			}),
			(t.prototype.getOption = t.prototype.slickGetOption = function (e) {
				return this.options[e];
			}),
			(t.prototype.getNavigableIndexes = function () {
				var e,
					t = this,
					n = 0,
					i = 0,
					o = [];
				for (
					!1 === t.options.infinite
						? (e = t.slideCount)
						: ((n = -1 * t.options.slidesToScroll),
						  (i = -1 * t.options.slidesToScroll),
						  (e = 2 * t.slideCount));
					n < e;

				)
					o.push(n),
						(n = i + t.options.slidesToScroll),
						(i +=
							t.options.slidesToScroll <= t.options.slidesToShow
								? t.options.slidesToScroll
								: t.options.slidesToShow);
				return o;
			}),
			(t.prototype.getSlick = function () {
				return this;
			}),
			(t.prototype.getSlideCount = function () {
				var t,
					n,
					i,
					o = this;
				return (
					(i =
						!0 === o.options.centerMode ? Math.floor(o.$list.width() / 2) : 0),
					(n = -1 * o.swipeLeft + i),
					!0 === o.options.swipeToSlide
						? (o.$slideTrack.find(".slick-slide").each(function (i, r) {
								var s, a;
								if (
									((s = e(r).outerWidth()),
									(a = r.offsetLeft),
									!0 !== o.options.centerMode && (a += s / 2),
									n < a + s)
								)
									return (t = r), !1;
						  }),
						  Math.abs(e(t).attr("data-slick-index") - o.currentSlide) || 1)
						: o.options.slidesToScroll
				);
			}),
			(t.prototype.goTo = t.prototype.slickGoTo = function (e, t) {
				this.changeSlide({ data: { message: "index", index: parseInt(e) } }, t);
			}),
			(t.prototype.init = function (t) {
				var n = this;
				e(n.$slider).hasClass("slick-initialized") ||
					(e(n.$slider).addClass("slick-initialized"),
					n.buildRows(),
					n.buildOut(),
					n.setProps(),
					n.startLoad(),
					n.loadSlider(),
					n.initializeEvents(),
					n.updateArrows(),
					n.updateDots(),
					n.checkResponsive(!0),
					n.focusHandler()),
					t && n.$slider.trigger("init", [n]),
					!0 === n.options.accessibility && n.initADA(),
					n.options.autoplay && ((n.paused = !1), n.autoPlay());
			}),
			(t.prototype.initADA = function () {
				var t = this,
					n = Math.ceil(t.slideCount / t.options.slidesToShow),
					i = t.getNavigableIndexes().filter(function (e) {
						return e >= 0 && e < t.slideCount;
					});
				t.$slides
					.add(t.$slideTrack.find(".slick-cloned"))
					.attr({ "aria-hidden": "true", tabindex: "-1" })
					.find("a, input, button, select")
					.attr({ tabindex: "-1" }),
					null !== t.$dots &&
						(t.$slides
							.not(t.$slideTrack.find(".slick-cloned"))
							.each(function (n) {
								var o = i.indexOf(n);
								if (
									(e(this).attr({
										role: "tabpanel",
										id: "slick-slide" + t.instanceUid + n,
										tabindex: -1,
									}),
									-1 !== o)
								) {
									var r = "slick-slide-control" + t.instanceUid + o;
									e("#" + r).length && e(this).attr({ "aria-describedby": r });
								}
							}),
						t.$dots
							.attr("role", "tablist")
							.find("li")
							.each(function (o) {
								var r = i[o];
								e(this).attr({ role: "presentation" }),
									e(this)
										.find("button")
										.first()
										.attr({
											role: "tab",
											id: "slick-slide-control" + t.instanceUid + o,
											"aria-controls": "slick-slide" + t.instanceUid + r,
											"aria-label": o + 1 + " of " + n,
											"aria-selected": null,
											tabindex: "-1",
										});
							})
							.eq(t.currentSlide)
							.find("button")
							.attr({ "aria-selected": "true", tabindex: "0" })
							.end());
				for (var o = t.currentSlide, r = o + t.options.slidesToShow; o < r; o++)
					t.options.focusOnChange
						? t.$slides.eq(o).attr({ tabindex: "0" })
						: t.$slides.eq(o).removeAttr("tabindex");
				t.activateADA();
			}),
			(t.prototype.initArrowEvents = function () {
				var e = this;
				!0 === e.options.arrows &&
					e.slideCount > e.options.slidesToShow &&
					(e.$prevArrow
						.off("click.slick")
						.on("click.slick", { message: "previous" }, e.changeSlide),
					e.$nextArrow
						.off("click.slick")
						.on("click.slick", { message: "next" }, e.changeSlide),
					!0 === e.options.accessibility &&
						(e.$prevArrow.on("keydown.slick", e.keyHandler),
						e.$nextArrow.on("keydown.slick", e.keyHandler)));
			}),
			(t.prototype.initDotEvents = function () {
				var t = this;
				!0 === t.options.dots &&
					t.slideCount > t.options.slidesToShow &&
					(e("li", t.$dots).on(
						"click.slick",
						{ message: "index" },
						t.changeSlide
					),
					!0 === t.options.accessibility &&
						t.$dots.on("keydown.slick", t.keyHandler)),
					!0 === t.options.dots &&
						!0 === t.options.pauseOnDotsHover &&
						t.slideCount > t.options.slidesToShow &&
						e("li", t.$dots)
							.on("mouseenter.slick", e.proxy(t.interrupt, t, !0))
							.on("mouseleave.slick", e.proxy(t.interrupt, t, !1));
			}),
			(t.prototype.initSlideEvents = function () {
				var t = this;
				t.options.pauseOnHover &&
					(t.$list.on("mouseenter.slick", e.proxy(t.interrupt, t, !0)),
					t.$list.on("mouseleave.slick", e.proxy(t.interrupt, t, !1)));
			}),
			(t.prototype.initializeEvents = function () {
				var t = this;
				t.initArrowEvents(),
					t.initDotEvents(),
					t.initSlideEvents(),
					t.$list.on(
						"touchstart.slick mousedown.slick",
						{ action: "start" },
						t.swipeHandler
					),
					t.$list.on(
						"touchmove.slick mousemove.slick",
						{ action: "move" },
						t.swipeHandler
					),
					t.$list.on(
						"touchend.slick mouseup.slick",
						{ action: "end" },
						t.swipeHandler
					),
					t.$list.on(
						"touchcancel.slick mouseleave.slick",
						{ action: "end" },
						t.swipeHandler
					),
					t.$list.on("click.slick", t.clickHandler),
					e(document).on(t.visibilityChange, e.proxy(t.visibility, t)),
					!0 === t.options.accessibility &&
						t.$list.on("keydown.slick", t.keyHandler),
					!0 === t.options.focusOnSelect &&
						e(t.$slideTrack).children().on("click.slick", t.selectHandler),
					e(window).on(
						"orientationchange.slick.slick-" + t.instanceUid,
						e.proxy(t.orientationChange, t)
					),
					e(window).on(
						"resize.slick.slick-" + t.instanceUid,
						e.proxy(t.resize, t)
					),
					e("[draggable!=true]", t.$slideTrack).on(
						"dragstart",
						t.preventDefault
					),
					e(window).on("load.slick.slick-" + t.instanceUid, t.setPosition),
					e(t.setPosition);
			}),
			(t.prototype.initUI = function () {
				var e = this;
				!0 === e.options.arrows &&
					e.slideCount > e.options.slidesToShow &&
					(e.$prevArrow.show(), e.$nextArrow.show()),
					!0 === e.options.dots &&
						e.slideCount > e.options.slidesToShow &&
						e.$dots.show();
			}),
			(t.prototype.keyHandler = function (e) {
				var t = this;
				e.target.tagName.match("TEXTAREA|INPUT|SELECT") ||
					(37 === e.keyCode && !0 === t.options.accessibility
						? t.changeSlide({
								data: { message: !0 === t.options.rtl ? "next" : "previous" },
						  })
						: 39 === e.keyCode &&
						  !0 === t.options.accessibility &&
						  t.changeSlide({
								data: { message: !0 === t.options.rtl ? "previous" : "next" },
						  }));
			}),
			(t.prototype.lazyLoad = function () {
				function t(t) {
					e("img[data-lazy]", t).each(function () {
						var t = e(this),
							n = e(this).attr("data-lazy"),
							i = e(this).attr("data-srcset"),
							o = e(this).attr("data-sizes") || r.$slider.attr("data-sizes"),
							s = document.createElement("img");
						(s.onload = function () {
							t.animate({ opacity: 0 }, 100, function () {
								i && (t.attr("srcset", i), o && t.attr("sizes", o)),
									t.attr("src", n).animate({ opacity: 1 }, 200, function () {
										t.removeAttr(
											"data-lazy data-srcset data-sizes"
										).removeClass("slick-loading");
									}),
									r.$slider.trigger("lazyLoaded", [r, t, n]);
							});
						}),
							(s.onerror = function () {
								t
									.removeAttr("data-lazy")
									.removeClass("slick-loading")
									.addClass("slick-lazyload-error"),
									r.$slider.trigger("lazyLoadError", [r, t, n]);
							}),
							(s.src = n);
					});
				}
				var n,
					i,
					o,
					r = this;
				if (
					(!0 === r.options.centerMode
						? !0 === r.options.infinite
							? (o =
									(i = r.currentSlide + (r.options.slidesToShow / 2 + 1)) +
									r.options.slidesToShow +
									2)
							: ((i = Math.max(
									0,
									r.currentSlide - (r.options.slidesToShow / 2 + 1)
							  )),
							  (o = r.options.slidesToShow / 2 + 1 + 2 + r.currentSlide))
						: ((i = r.options.infinite
								? r.options.slidesToShow + r.currentSlide
								: r.currentSlide),
						  (o = Math.ceil(i + r.options.slidesToShow)),
						  !0 === r.options.fade &&
								(i > 0 && i--, o <= r.slideCount && o++)),
					(n = r.$slider.find(".slick-slide").slice(i, o)),
					"anticipated" === r.options.lazyLoad)
				)
					for (
						var s = i - 1, a = o, l = r.$slider.find(".slick-slide"), c = 0;
						c < r.options.slidesToScroll;
						c++
					)
						s < 0 && (s = r.slideCount - 1),
							(n = (n = n.add(l.eq(s))).add(l.eq(a))),
							s--,
							a++;
				t(n),
					r.slideCount <= r.options.slidesToShow
						? t(r.$slider.find(".slick-slide"))
						: r.currentSlide >= r.slideCount - r.options.slidesToShow
						? t(
								r.$slider.find(".slick-cloned").slice(0, r.options.slidesToShow)
						  )
						: 0 === r.currentSlide &&
						  t(
								r.$slider
									.find(".slick-cloned")
									.slice(-1 * r.options.slidesToShow)
						  );
			}),
			(t.prototype.loadSlider = function () {
				var e = this;
				e.setPosition(),
					e.$slideTrack.css({ opacity: 1 }),
					e.$slider.removeClass("slick-loading"),
					e.initUI(),
					"progressive" === e.options.lazyLoad && e.progressiveLazyLoad();
			}),
			(t.prototype.next = t.prototype.slickNext = function () {
				this.changeSlide({ data: { message: "next" } });
			}),
			(t.prototype.orientationChange = function () {
				var e = this;
				e.checkResponsive(), e.setPosition();
			}),
			(t.prototype.pause = t.prototype.slickPause = function () {
				var e = this;
				e.autoPlayClear(), (e.paused = !0);
			}),
			(t.prototype.play = t.prototype.slickPlay = function () {
				var e = this;
				e.autoPlay(),
					(e.options.autoplay = !0),
					(e.paused = !1),
					(e.focussed = !1),
					(e.interrupted = !1);
			}),
			(t.prototype.postSlide = function (t) {
				var n = this;
				!n.unslicked &&
					(n.$slider.trigger("afterChange", [n, t]),
					(n.animating = !1),
					n.slideCount > n.options.slidesToShow && n.setPosition(),
					(n.swipeLeft = null),
					n.options.autoplay && n.autoPlay(),
					!0 === n.options.accessibility &&
						(n.initADA(), n.options.focusOnChange)) &&
					e(n.$slides.get(n.currentSlide)).attr("tabindex", 0).focus();
			}),
			(t.prototype.prev = t.prototype.slickPrev = function () {
				this.changeSlide({ data: { message: "previous" } });
			}),
			(t.prototype.preventDefault = function (e) {
				e.preventDefault();
			}),
			(t.prototype.progressiveLazyLoad = function (t) {
				t = t || 1;
				var n,
					i,
					o,
					r,
					s,
					a = this,
					l = e("img[data-lazy]", a.$slider);
				l.length
					? ((n = l.first()),
					  (i = n.attr("data-lazy")),
					  (o = n.attr("data-srcset")),
					  (r = n.attr("data-sizes") || a.$slider.attr("data-sizes")),
					  ((s = document.createElement("img")).onload = function () {
							o && (n.attr("srcset", o), r && n.attr("sizes", r)),
								n
									.attr("src", i)
									.removeAttr("data-lazy data-srcset data-sizes")
									.removeClass("slick-loading"),
								!0 === a.options.adaptiveHeight && a.setPosition(),
								a.$slider.trigger("lazyLoaded", [a, n, i]),
								a.progressiveLazyLoad();
					  }),
					  (s.onerror = function () {
							t < 3
								? setTimeout(function () {
										a.progressiveLazyLoad(t + 1);
								  }, 500)
								: (n
										.removeAttr("data-lazy")
										.removeClass("slick-loading")
										.addClass("slick-lazyload-error"),
								  a.$slider.trigger("lazyLoadError", [a, n, i]),
								  a.progressiveLazyLoad());
					  }),
					  (s.src = i))
					: a.$slider.trigger("allImagesLoaded", [a]);
			}),
			(t.prototype.refresh = function (t) {
				var n,
					i,
					o = this;
				(i = o.slideCount - o.options.slidesToShow),
					!o.options.infinite && o.currentSlide > i && (o.currentSlide = i),
					o.slideCount <= o.options.slidesToShow && (o.currentSlide = 0),
					(n = o.currentSlide),
					o.destroy(!0),
					e.extend(o, o.initials, { currentSlide: n }),
					o.init(),
					t || o.changeSlide({ data: { message: "index", index: n } }, !1);
			}),
			(t.prototype.registerBreakpoints = function () {
				var t,
					n,
					i,
					o = this,
					r = o.options.responsive || null;
				if ("array" === e.type(r) && r.length) {
					for (t in ((o.respondTo = o.options.respondTo || "window"), r))
						if (((i = o.breakpoints.length - 1), r.hasOwnProperty(t))) {
							for (n = r[t].breakpoint; i >= 0; )
								o.breakpoints[i] &&
									o.breakpoints[i] === n &&
									o.breakpoints.splice(i, 1),
									i--;
							o.breakpoints.push(n), (o.breakpointSettings[n] = r[t].settings);
						}
					o.breakpoints.sort(function (e, t) {
						return o.options.mobileFirst ? e - t : t - e;
					});
				}
			}),
			(t.prototype.reinit = function () {
				var t = this;
				(t.$slides = t.$slideTrack
					.children(t.options.slide)
					.addClass("slick-slide")),
					(t.slideCount = t.$slides.length),
					t.currentSlide >= t.slideCount &&
						0 !== t.currentSlide &&
						(t.currentSlide = t.currentSlide - t.options.slidesToScroll),
					t.slideCount <= t.options.slidesToShow && (t.currentSlide = 0),
					t.registerBreakpoints(),
					t.setProps(),
					t.setupInfinite(),
					t.buildArrows(),
					t.updateArrows(),
					t.initArrowEvents(),
					t.buildDots(),
					t.updateDots(),
					t.initDotEvents(),
					t.cleanUpSlideEvents(),
					t.initSlideEvents(),
					t.checkResponsive(!1, !0),
					!0 === t.options.focusOnSelect &&
						e(t.$slideTrack).children().on("click.slick", t.selectHandler),
					t.setSlideClasses(
						"number" == typeof t.currentSlide ? t.currentSlide : 0
					),
					t.setPosition(),
					t.focusHandler(),
					(t.paused = !t.options.autoplay),
					t.autoPlay(),
					t.$slider.trigger("reInit", [t]);
			}),
			(t.prototype.resize = function () {
				var t = this;
				e(window).width() !== t.windowWidth &&
					(clearTimeout(t.windowDelay),
					(t.windowDelay = window.setTimeout(function () {
						(t.windowWidth = e(window).width()),
							t.checkResponsive(),
							t.unslicked || t.setPosition();
					}, 50)));
			}),
			(t.prototype.removeSlide = t.prototype.slickRemove = function (e, t, n) {
				var i = this;
				return (
					"boolean" == typeof e
						? (e = !0 === (t = e) ? 0 : i.slideCount - 1)
						: (e = !0 === t ? --e : e),
					!(i.slideCount < 1 || e < 0 || e > i.slideCount - 1) &&
						(i.unload(),
						!0 === n
							? i.$slideTrack.children().remove()
							: i.$slideTrack.children(this.options.slide).eq(e).remove(),
						(i.$slides = i.$slideTrack.children(this.options.slide)),
						i.$slideTrack.children(this.options.slide).detach(),
						i.$slideTrack.append(i.$slides),
						(i.$slidesCache = i.$slides),
						void i.reinit())
				);
			}),
			(t.prototype.setCSS = function (e) {
				var t,
					n,
					i = this,
					o = {};
				!0 === i.options.rtl && (e = -e),
					(t = "left" == i.positionProp ? Math.ceil(e) + "px" : "0px"),
					(n = "top" == i.positionProp ? Math.ceil(e) + "px" : "0px"),
					(o[i.positionProp] = e),
					!1 === i.transformsEnabled
						? i.$slideTrack.css(o)
						: ((o = {}),
						  !1 === i.cssTransitions
								? ((o[i.animType] = "translate(" + t + ", " + n + ")"),
								  i.$slideTrack.css(o))
								: ((o[i.animType] = "translate3d(" + t + ", " + n + ", 0px)"),
								  i.$slideTrack.css(o)));
			}),
			(t.prototype.setDimensions = function () {
				var e = this;
				!1 === e.options.vertical
					? !0 === e.options.centerMode &&
					  e.$list.css({ padding: "0px " + e.options.centerPadding })
					: (e.$list.height(
							e.$slides.first().outerHeight(!0) * e.options.slidesToShow
					  ),
					  !0 === e.options.centerMode &&
							e.$list.css({ padding: e.options.centerPadding + " 0px" })),
					(e.listWidth = e.$list.width()),
					(e.listHeight = e.$list.height()),
					!1 === e.options.vertical && !1 === e.options.variableWidth
						? ((e.slideWidth = Math.ceil(e.listWidth / e.options.slidesToShow)),
						  e.$slideTrack.width(
								Math.ceil(
									e.slideWidth * e.$slideTrack.children(".slick-slide").length
								)
						  ))
						: !0 === e.options.variableWidth
						? e.$slideTrack.width(5e3 * e.slideCount)
						: ((e.slideWidth = Math.ceil(e.listWidth)),
						  e.$slideTrack.height(
								Math.ceil(
									e.$slides.first().outerHeight(!0) *
										e.$slideTrack.children(".slick-slide").length
								)
						  ));
				var t = e.$slides.first().outerWidth(!0) - e.$slides.first().width();
				!1 === e.options.variableWidth &&
					e.$slideTrack.children(".slick-slide").width(e.slideWidth - t);
			}),
			(t.prototype.setFade = function () {
				var t,
					n = this;
				n.$slides.each(function (i, o) {
					(t = n.slideWidth * i * -1),
						!0 === n.options.rtl
							? e(o).css({
									position: "relative",
									right: t,
									top: 0,
									zIndex: n.options.zIndex - 2,
									opacity: 0,
							  })
							: e(o).css({
									position: "relative",
									left: t,
									top: 0,
									zIndex: n.options.zIndex - 2,
									opacity: 0,
							  });
				}),
					n.$slides
						.eq(n.currentSlide)
						.css({ zIndex: n.options.zIndex - 1, opacity: 1 });
			}),
			(t.prototype.setHeight = function () {
				var e = this;
				if (
					1 === e.options.slidesToShow &&
					!0 === e.options.adaptiveHeight &&
					!1 === e.options.vertical
				) {
					var t = e.$slides.eq(e.currentSlide).outerHeight(!0);
					e.$list.css("height", t);
				}
			}),
			(t.prototype.setOption = t.prototype.slickSetOption = function () {
				var t,
					n,
					i,
					o,
					r,
					s = this,
					a = !1;
				if (
					("object" === e.type(arguments[0])
						? ((i = arguments[0]), (a = arguments[1]), (r = "multiple"))
						: "string" === e.type(arguments[0]) &&
						  ((i = arguments[0]),
						  (o = arguments[1]),
						  (a = arguments[2]),
						  "responsive" === arguments[0] && "array" === e.type(arguments[1])
								? (r = "responsive")
								: "undefined" != typeof arguments[1] && (r = "single")),
					"single" === r)
				)
					s.options[i] = o;
				else if ("multiple" === r)
					e.each(i, function (e, t) {
						s.options[e] = t;
					});
				else if ("responsive" === r)
					for (n in o)
						if ("array" !== e.type(s.options.responsive))
							s.options.responsive = [o[n]];
						else {
							for (t = s.options.responsive.length - 1; t >= 0; )
								s.options.responsive[t].breakpoint === o[n].breakpoint &&
									s.options.responsive.splice(t, 1),
									t--;
							s.options.responsive.push(o[n]);
						}
				a && (s.unload(), s.reinit());
			}),
			(t.prototype.setPosition = function () {
				var e = this;
				e.setDimensions(),
					e.setHeight(),
					!1 === e.options.fade
						? e.setCSS(e.getLeft(e.currentSlide))
						: e.setFade(),
					e.$slider.trigger("setPosition", [e]);
			}),
			(t.prototype.setProps = function () {
				var e = this,
					t = document.body.style;
				(e.positionProp = !0 === e.options.vertical ? "top" : "left"),
					"top" === e.positionProp
						? e.$slider.addClass("slick-vertical")
						: e.$slider.removeClass("slick-vertical"),
					(void 0 === t.WebkitTransition &&
						void 0 === t.MozTransition &&
						void 0 === t.msTransition) ||
						(!0 === e.options.useCSS && (e.cssTransitions = !0)),
					e.options.fade &&
						("number" == typeof e.options.zIndex
							? e.options.zIndex < 3 && (e.options.zIndex = 3)
							: (e.options.zIndex = e.defaults.zIndex)),
					void 0 !== t.OTransform &&
						((e.animType = "OTransform"),
						(e.transformType = "-o-transform"),
						(e.transitionType = "OTransition"),
						void 0 === t.perspectiveProperty &&
							void 0 === t.webkitPerspective &&
							(e.animType = !1)),
					void 0 !== t.MozTransform &&
						((e.animType = "MozTransform"),
						(e.transformType = "-moz-transform"),
						(e.transitionType = "MozTransition"),
						void 0 === t.perspectiveProperty &&
							void 0 === t.MozPerspective &&
							(e.animType = !1)),
					void 0 !== t.webkitTransform &&
						((e.animType = "webkitTransform"),
						(e.transformType = "-webkit-transform"),
						(e.transitionType = "webkitTransition"),
						void 0 === t.perspectiveProperty &&
							void 0 === t.webkitPerspective &&
							(e.animType = !1)),
					void 0 !== t.msTransform &&
						((e.animType = "msTransform"),
						(e.transformType = "-ms-transform"),
						(e.transitionType = "msTransition"),
						void 0 === t.msTransform && (e.animType = !1)),
					void 0 !== t.transform &&
						!1 !== e.animType &&
						((e.animType = "transform"),
						(e.transformType = "transform"),
						(e.transitionType = "transition")),
					(e.transformsEnabled =
						e.options.useTransform && null !== e.animType && !1 !== e.animType);
			}),
			(t.prototype.setSlideClasses = function (e) {
				var t,
					n,
					i,
					o,
					r = this;
				if (
					((n = r.$slider
						.find(".slick-slide")
						.removeClass("slick-active slick-center slick-current")
						.attr("aria-hidden", "true")),
					r.$slides.eq(e).addClass("slick-current"),
					!0 === r.options.centerMode)
				) {
					var s = r.options.slidesToShow % 2 == 0 ? 1 : 0;
					(t = Math.floor(r.options.slidesToShow / 2)),
						!0 === r.options.infinite &&
							(e >= t && e <= r.slideCount - 1 - t
								? r.$slides
										.slice(e - t + s, e + t + 1)
										.addClass("slick-active")
										.attr("aria-hidden", "false")
								: ((i = r.options.slidesToShow + e),
								  n
										.slice(i - t + 1 + s, i + t + 2)
										.addClass("slick-active")
										.attr("aria-hidden", "false")),
							0 === e
								? n
										.eq(n.length - 1 - r.options.slidesToShow)
										.addClass("slick-center")
								: e === r.slideCount - 1 &&
								  n.eq(r.options.slidesToShow).addClass("slick-center")),
						r.$slides.eq(e).addClass("slick-center");
				} else
					e >= 0 && e <= r.slideCount - r.options.slidesToShow
						? r.$slides
								.slice(e, e + r.options.slidesToShow)
								.addClass("slick-active")
								.attr("aria-hidden", "false")
						: n.length <= r.options.slidesToShow
						? n.addClass("slick-active").attr("aria-hidden", "false")
						: ((o = r.slideCount % r.options.slidesToShow),
						  (i = !0 === r.options.infinite ? r.options.slidesToShow + e : e),
						  r.options.slidesToShow == r.options.slidesToScroll &&
						  r.slideCount - e < r.options.slidesToShow
								? n
										.slice(i - (r.options.slidesToShow - o), i + o)
										.addClass("slick-active")
										.attr("aria-hidden", "false")
								: n
										.slice(i, i + r.options.slidesToShow)
										.addClass("slick-active")
										.attr("aria-hidden", "false"));
				("ondemand" !== r.options.lazyLoad &&
					"anticipated" !== r.options.lazyLoad) ||
					r.lazyLoad();
			}),
			(t.prototype.setupInfinite = function () {
				var t,
					n,
					i,
					o = this;
				if (
					(!0 === o.options.fade && (o.options.centerMode = !1),
					!0 === o.options.infinite &&
						!1 === o.options.fade &&
						((n = null), o.slideCount > o.options.slidesToShow))
				) {
					for (
						i =
							!0 === o.options.centerMode
								? o.options.slidesToShow + 1
								: o.options.slidesToShow,
							t = o.slideCount;
						t > o.slideCount - i;
						t -= 1
					)
						(n = t - 1),
							e(o.$slides[n])
								.clone(!0)
								.attr("id", "")
								.attr("data-slick-index", n - o.slideCount)
								.prependTo(o.$slideTrack)
								.addClass("slick-cloned");
					for (t = 0; t < i + o.slideCount; t += 1)
						(n = t),
							e(o.$slides[n])
								.clone(!0)
								.attr("id", "")
								.attr("data-slick-index", n + o.slideCount)
								.appendTo(o.$slideTrack)
								.addClass("slick-cloned");
					o.$slideTrack
						.find(".slick-cloned")
						.find("[id]")
						.each(function () {
							e(this).attr("id", "");
						});
				}
			}),
			(t.prototype.interrupt = function (e) {
				var t = this;
				e || t.autoPlay(), (t.interrupted = e);
			}),
			(t.prototype.selectHandler = function (t) {
				var n = this,
					i = e(t.target).is(".slick-slide")
						? e(t.target)
						: e(t.target).parents(".slick-slide"),
					o = parseInt(i.attr("data-slick-index"));
				return (
					o || (o = 0),
					n.slideCount <= n.options.slidesToShow
						? void n.slideHandler(o, !1, !0)
						: void n.slideHandler(o)
				);
			}),
			(t.prototype.slideHandler = function (e, t, n) {
				var i,
					o,
					r,
					s,
					a,
					l = null,
					c = this;
				if (
					((t = t || !1),
					!(
						(!0 === c.animating && !0 === c.options.waitForAnimate) ||
						(!0 === c.options.fade && c.currentSlide === e)
					))
				)
					return (
						!1 === t && c.asNavFor(e),
						(i = e),
						(l = c.getLeft(i)),
						(s = c.getLeft(c.currentSlide)),
						(c.currentLeft = null === c.swipeLeft ? s : c.swipeLeft),
						!1 === c.options.infinite &&
						!1 === c.options.centerMode &&
						(e < 0 || e > c.getDotCount() * c.options.slidesToScroll)
							? void (
									!1 === c.options.fade &&
									((i = c.currentSlide),
									!0 !== n && c.slideCount > c.options.slidesToShow
										? c.animateSlide(s, function () {
												c.postSlide(i);
										  })
										: c.postSlide(i))
							  )
							: !1 === c.options.infinite &&
							  !0 === c.options.centerMode &&
							  (e < 0 || e > c.slideCount - c.options.slidesToScroll)
							? void (
									!1 === c.options.fade &&
									((i = c.currentSlide),
									!0 !== n && c.slideCount > c.options.slidesToShow
										? c.animateSlide(s, function () {
												c.postSlide(i);
										  })
										: c.postSlide(i))
							  )
							: (c.options.autoplay && clearInterval(c.autoPlayTimer),
							  (o =
									i < 0
										? c.slideCount % c.options.slidesToScroll != 0
											? c.slideCount - (c.slideCount % c.options.slidesToScroll)
											: c.slideCount + i
										: i >= c.slideCount
										? c.slideCount % c.options.slidesToScroll != 0
											? 0
											: i - c.slideCount
										: i),
							  (c.animating = !0),
							  c.$slider.trigger("beforeChange", [c, c.currentSlide, o]),
							  (r = c.currentSlide),
							  (c.currentSlide = o),
							  c.setSlideClasses(c.currentSlide),
							  c.options.asNavFor &&
									(a = (a = c.getNavTarget()).slick("getSlick")).slideCount <=
										a.options.slidesToShow &&
									a.setSlideClasses(c.currentSlide),
							  c.updateDots(),
							  c.updateArrows(),
							  !0 === c.options.fade
									? (!0 !== n
											? (c.fadeSlideOut(r),
											  c.fadeSlide(o, function () {
													c.postSlide(o);
											  }))
											: c.postSlide(o),
									  void c.animateHeight())
									: void (!0 !== n && c.slideCount > c.options.slidesToShow
											? c.animateSlide(l, function () {
													c.postSlide(o);
											  })
											: c.postSlide(o)))
					);
			}),
			(t.prototype.startLoad = function () {
				var e = this;
				!0 === e.options.arrows &&
					e.slideCount > e.options.slidesToShow &&
					(e.$prevArrow.hide(), e.$nextArrow.hide()),
					!0 === e.options.dots &&
						e.slideCount > e.options.slidesToShow &&
						e.$dots.hide(),
					e.$slider.addClass("slick-loading");
			}),
			(t.prototype.swipeDirection = function () {
				var e,
					t,
					n,
					i,
					o = this;
				return (
					(e = o.touchObject.startX - o.touchObject.curX),
					(t = o.touchObject.startY - o.touchObject.curY),
					(n = Math.atan2(t, e)),
					(i = Math.round((180 * n) / Math.PI)) < 0 && (i = 360 - Math.abs(i)),
					i <= 45 && i >= 0
						? !1 === o.options.rtl
							? "left"
							: "right"
						: i <= 360 && i >= 315
						? !1 === o.options.rtl
							? "left"
							: "right"
						: i >= 135 && i <= 225
						? !1 === o.options.rtl
							? "right"
							: "left"
						: !0 === o.options.verticalSwiping
						? i >= 35 && i <= 135
							? "down"
							: "up"
						: "vertical"
				);
			}),
			(t.prototype.swipeEnd = function () {
				var e,
					t,
					n = this;
				if (((n.dragging = !1), (n.swiping = !1), n.scrolling))
					return (n.scrolling = !1), !1;
				if (
					((n.interrupted = !1),
					(n.shouldClick = !(n.touchObject.swipeLength > 10)),
					void 0 === n.touchObject.curX)
				)
					return !1;
				if (
					(!0 === n.touchObject.edgeHit &&
						n.$slider.trigger("edge", [n, n.swipeDirection()]),
					n.touchObject.swipeLength >= n.touchObject.minSwipe)
				) {
					switch ((t = n.swipeDirection())) {
						case "left":
						case "down":
							(e = n.options.swipeToSlide
								? n.checkNavigable(n.currentSlide + n.getSlideCount())
								: n.currentSlide + n.getSlideCount()),
								(n.currentDirection = 0);
							break;
						case "right":
						case "up":
							(e = n.options.swipeToSlide
								? n.checkNavigable(n.currentSlide - n.getSlideCount())
								: n.currentSlide - n.getSlideCount()),
								(n.currentDirection = 1);
					}
					"vertical" != t &&
						(n.slideHandler(e),
						(n.touchObject = {}),
						n.$slider.trigger("swipe", [n, t]));
				} else
					n.touchObject.startX !== n.touchObject.curX &&
						(n.slideHandler(n.currentSlide), (n.touchObject = {}));
			}),
			(t.prototype.swipeHandler = function (e) {
				var t = this;
				if (
					!(
						!1 === t.options.swipe ||
						("ontouchend" in document && !1 === t.options.swipe) ||
						(!1 === t.options.draggable && -1 !== e.type.indexOf("mouse"))
					)
				)
					switch (
						((t.touchObject.fingerCount =
							e.originalEvent && void 0 !== e.originalEvent.touches
								? e.originalEvent.touches.length
								: 1),
						(t.touchObject.minSwipe = t.listWidth / t.options.touchThreshold),
						!0 === t.options.verticalSwiping &&
							(t.touchObject.minSwipe =
								t.listHeight / t.options.touchThreshold),
						e.data.action)
					) {
						case "start":
							t.swipeStart(e);
							break;
						case "move":
							t.swipeMove(e);
							break;
						case "end":
							t.swipeEnd(e);
					}
			}),
			(t.prototype.swipeMove = function (e) {
				var t,
					n,
					i,
					o,
					r,
					s,
					a = this;
				return (
					(r = void 0 !== e.originalEvent ? e.originalEvent.touches : null),
					!(!a.dragging || a.scrolling || (r && 1 !== r.length)) &&
						((t = a.getLeft(a.currentSlide)),
						(a.touchObject.curX = void 0 !== r ? r[0].pageX : e.clientX),
						(a.touchObject.curY = void 0 !== r ? r[0].pageY : e.clientY),
						(a.touchObject.swipeLength = Math.round(
							Math.sqrt(Math.pow(a.touchObject.curX - a.touchObject.startX, 2))
						)),
						(s = Math.round(
							Math.sqrt(Math.pow(a.touchObject.curY - a.touchObject.startY, 2))
						)),
						!a.options.verticalSwiping && !a.swiping && s > 4
							? ((a.scrolling = !0), !1)
							: (!0 === a.options.verticalSwiping &&
									(a.touchObject.swipeLength = s),
							  (n = a.swipeDirection()),
							  void 0 !== e.originalEvent &&
									a.touchObject.swipeLength > 4 &&
									((a.swiping = !0), e.preventDefault()),
							  (o =
									(!1 === a.options.rtl ? 1 : -1) *
									(a.touchObject.curX > a.touchObject.startX ? 1 : -1)),
							  !0 === a.options.verticalSwiping &&
									(o = a.touchObject.curY > a.touchObject.startY ? 1 : -1),
							  (i = a.touchObject.swipeLength),
							  (a.touchObject.edgeHit = !1),
							  !1 === a.options.infinite &&
									((0 === a.currentSlide && "right" === n) ||
										(a.currentSlide >= a.getDotCount() && "left" === n)) &&
									((i = a.touchObject.swipeLength * a.options.edgeFriction),
									(a.touchObject.edgeHit = !0)),
							  !1 === a.options.vertical
									? (a.swipeLeft = t + i * o)
									: (a.swipeLeft =
											t + i * (a.$list.height() / a.listWidth) * o),
							  !0 === a.options.verticalSwiping && (a.swipeLeft = t + i * o),
							  !0 !== a.options.fade &&
									!1 !== a.options.touchMove &&
									(!0 === a.animating
										? ((a.swipeLeft = null), !1)
										: void a.setCSS(a.swipeLeft))))
				);
			}),
			(t.prototype.swipeStart = function (e) {
				var t,
					n = this;
				return (
					(n.interrupted = !0),
					1 !== n.touchObject.fingerCount ||
					n.slideCount <= n.options.slidesToShow
						? ((n.touchObject = {}), !1)
						: (void 0 !== e.originalEvent &&
								void 0 !== e.originalEvent.touches &&
								(t = e.originalEvent.touches[0]),
						  (n.touchObject.startX = n.touchObject.curX =
								void 0 !== t ? t.pageX : e.clientX),
						  (n.touchObject.startY = n.touchObject.curY =
								void 0 !== t ? t.pageY : e.clientY),
						  void (n.dragging = !0))
				);
			}),
			(t.prototype.unfilterSlides = t.prototype.slickUnfilter = function () {
				var e = this;
				null !== e.$slidesCache &&
					(e.unload(),
					e.$slideTrack.children(this.options.slide).detach(),
					e.$slidesCache.appendTo(e.$slideTrack),
					e.reinit());
			}),
			(t.prototype.unload = function () {
				var t = this;
				e(".slick-cloned", t.$slider).remove(),
					t.$dots && t.$dots.remove(),
					t.$prevArrow &&
						t.htmlExpr.test(t.options.prevArrow) &&
						t.$prevArrow.remove(),
					t.$nextArrow &&
						t.htmlExpr.test(t.options.nextArrow) &&
						t.$nextArrow.remove(),
					t.$slides
						.removeClass("slick-slide slick-active slick-visible slick-current")
						.attr("aria-hidden", "true")
						.css("width", "");
			}),
			(t.prototype.unslick = function (e) {
				var t = this;
				t.$slider.trigger("unslick", [t, e]), t.destroy();
			}),
			(t.prototype.updateArrows = function () {
				var e = this;
				Math.floor(e.options.slidesToShow / 2),
					!0 === e.options.arrows &&
						e.slideCount > e.options.slidesToShow &&
						!e.options.infinite &&
						(e.$prevArrow
							.removeClass("slick-disabled")
							.attr("aria-disabled", "false"),
						e.$nextArrow
							.removeClass("slick-disabled")
							.attr("aria-disabled", "false"),
						0 === e.currentSlide
							? (e.$prevArrow
									.addClass("slick-disabled")
									.attr("aria-disabled", "true"),
							  e.$nextArrow
									.removeClass("slick-disabled")
									.attr("aria-disabled", "false"))
							: e.currentSlide >= e.slideCount - e.options.slidesToShow &&
							  !1 === e.options.centerMode
							? (e.$nextArrow
									.addClass("slick-disabled")
									.attr("aria-disabled", "true"),
							  e.$prevArrow
									.removeClass("slick-disabled")
									.attr("aria-disabled", "false"))
							: e.currentSlide >= e.slideCount - 1 &&
							  !0 === e.options.centerMode &&
							  (e.$nextArrow
									.addClass("slick-disabled")
									.attr("aria-disabled", "true"),
							  e.$prevArrow
									.removeClass("slick-disabled")
									.attr("aria-disabled", "false")));
			}),
			(t.prototype.updateDots = function () {
				var e = this;
				null !== e.$dots &&
					(e.$dots.find("li").removeClass("slick-active").end(),
					e.$dots
						.find("li")
						.eq(Math.floor(e.currentSlide / e.options.slidesToScroll))
						.addClass("slick-active"));
			}),
			(t.prototype.visibility = function () {
				var e = this;
				e.options.autoplay &&
					(document[e.hidden] ? (e.interrupted = !0) : (e.interrupted = !1));
			}),
			(e.fn.slick = function () {
				var e,
					n,
					i = this,
					o = arguments[0],
					r = Array.prototype.slice.call(arguments, 1),
					s = i.length;
				for (e = 0; e < s; e++)
					if (
						("object" == typeof o || void 0 === o
							? (i[e].slick = new t(i[e], o))
							: (n = i[e].slick[o].apply(i[e].slick, r)),
						void 0 !== n)
					)
						return n;
				return i;
			});
	}),
	(function (e, t) {
		"function" == typeof define && define.amd
			? define("bloodhound", ["jquery"], function (n) {
					return (e.Bloodhound = t(n));
			  })
			: "object" == typeof exports
			? (module.exports = t(require("jquery")))
			: (e.Bloodhound = t(jQuery));
	})(this, function (e) {
		var t = (function () {
				"use strict";
				return {
					isMsie: function () {
						return (
							!!/(msie|trident)/i.test(navigator.userAgent) &&
							navigator.userAgent.match(/(msie |rv:)(\d+(.\d+)?)/i)[2]
						);
					},
					isBlankString: function (e) {
						return !e || /^\s*$/.test(e);
					},
					escapeRegExChars: function (e) {
						return e.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
					},
					isString: function (e) {
						return "string" == typeof e;
					},
					isNumber: function (e) {
						return "number" == typeof e;
					},
					isArray: e.isArray,
					isFunction: e.isFunction,
					isObject: e.isPlainObject,
					isUndefined: function (e) {
						return void 0 === e;
					},
					isElement: function (e) {
						return !(!e || 1 !== e.nodeType);
					},
					isJQuery: function (t) {
						return t instanceof e;
					},
					toStr: function (e) {
						return t.isUndefined(e) || null === e ? "" : e + "";
					},
					bind: e.proxy,
					each: function (t, n) {
						function i(e, t) {
							return n(t, e);
						}
						e.each(t, i);
					},
					map: e.map,
					filter: e.grep,
					every: function (t, n) {
						var i = !0;
						return t
							? (e.each(t, function (e, o) {
									return !!(i = n.call(null, o, e, t)) && void 0;
							  }),
							  !!i)
							: i;
					},
					some: function (t, n) {
						var i = !1;
						return t
							? (e.each(t, function (e, o) {
									return !(i = n.call(null, o, e, t)) && void 0;
							  }),
							  !!i)
							: i;
					},
					mixin: e.extend,
					identity: function (e) {
						return e;
					},
					clone: function (t) {
						return e.extend(!0, {}, t);
					},
					getIdGenerator: function () {
						var e = 0;
						return function () {
							return e++;
						};
					},
					templatify: function (t) {
						function n() {
							return String(t);
						}
						return e.isFunction(t) ? t : n;
					},
					defer: function (e) {
						setTimeout(e, 0);
					},
					debounce: function (e, t, n) {
						var i, o;
						return function () {
							var r,
								s,
								a = this,
								l = arguments;
							return (
								(r = function () {
									(i = null), n || (o = e.apply(a, l));
								}),
								(s = n && !i),
								clearTimeout(i),
								(i = setTimeout(r, t)),
								s && (o = e.apply(a, l)),
								o
							);
						};
					},
					throttle: function (e, t) {
						var n, i, o, r, s, a;
						return (
							(s = 0),
							(a = function () {
								(s = new Date()), (o = null), (r = e.apply(n, i));
							}),
							function () {
								var l = new Date(),
									c = t - (l - s);
								return (
									(n = this),
									(i = arguments),
									0 >= c
										? (clearTimeout(o),
										  (o = null),
										  (s = l),
										  (r = e.apply(n, i)))
										: o || (o = setTimeout(a, c)),
									r
								);
							}
						);
					},
					stringify: function (e) {
						return t.isString(e) ? e : JSON.stringify(e);
					},
					noop: function () {},
				};
			})(),
			n = "0.11.1",
			i = (function () {
				"use strict";
				function e(e) {
					return (e = t.toStr(e)) ? e.split(/\s+/) : [];
				}
				function n(e) {
					return (e = t.toStr(e)) ? e.split(/\W+/) : [];
				}
				function i(e) {
					return function (n) {
						return (
							(n = t.isArray(n) ? n : [].slice.call(arguments, 0)),
							function (i) {
								var o = [];
								return (
									t.each(n, function (n) {
										o = o.concat(e(t.toStr(i[n])));
									}),
									o
								);
							}
						);
					};
				}
				return {
					nonword: n,
					whitespace: e,
					obj: { nonword: i(n), whitespace: i(e) },
				};
			})(),
			o = (function () {
				"use strict";
				function n(n) {
					(this.maxSize = t.isNumber(n) ? n : 100),
						this.reset(),
						this.maxSize <= 0 && (this.set = this.get = e.noop);
				}
				function i() {
					this.head = this.tail = null;
				}
				function o(e, t) {
					(this.key = e), (this.val = t), (this.prev = this.next = null);
				}
				return (
					t.mixin(n.prototype, {
						set: function (e, t) {
							var n,
								i = this.list.tail;
							this.size >= this.maxSize &&
								(this.list.remove(i), delete this.hash[i.key], this.size--),
								(n = this.hash[e])
									? ((n.val = t), this.list.moveToFront(n))
									: ((n = new o(e, t)),
									  this.list.add(n),
									  (this.hash[e] = n),
									  this.size++);
						},
						get: function (e) {
							var t = this.hash[e];
							return t ? (this.list.moveToFront(t), t.val) : void 0;
						},
						reset: function () {
							(this.size = 0), (this.hash = {}), (this.list = new i());
						},
					}),
					t.mixin(i.prototype, {
						add: function (e) {
							this.head && ((e.next = this.head), (this.head.prev = e)),
								(this.head = e),
								(this.tail = this.tail || e);
						},
						remove: function (e) {
							e.prev ? (e.prev.next = e.next) : (this.head = e.next),
								e.next ? (e.next.prev = e.prev) : (this.tail = e.prev);
						},
						moveToFront: function (e) {
							this.remove(e), this.add(e);
						},
					}),
					n
				);
			})(),
			r = (function () {
				"use strict";
				function n(e, n) {
					(this.prefix = ["__", e, "__"].join("")),
						(this.ttlKey = "__ttl__"),
						(this.keyMatcher = new RegExp(
							"^" + t.escapeRegExChars(this.prefix)
						)),
						(this.ls = n || a),
						!this.ls && this._noop();
				}
				function i() {
					return new Date().getTime();
				}
				function o(e) {
					return JSON.stringify(t.isUndefined(e) ? null : e);
				}
				function r(t) {
					return e.parseJSON(t);
				}
				function s(e) {
					var t,
						n,
						i = [],
						o = a.length;
					for (t = 0; o > t; t++)
						(n = a.key(t)).match(e) && i.push(n.replace(e, ""));
					return i;
				}
				var a;
				try {
					(a = window.localStorage).setItem("~~~", "!"), a.removeItem("~~~");
				} catch (l) {
					a = null;
				}
				return (
					t.mixin(n.prototype, {
						_prefix: function (e) {
							return this.prefix + e;
						},
						_ttlKey: function (e) {
							return this._prefix(e) + this.ttlKey;
						},
						_noop: function () {
							this.get = this.set = this.remove = this.clear = this.isExpired =
								t.noop;
						},
						_safeSet: function (e, t) {
							try {
								this.ls.setItem(e, t);
							} catch (n) {
								"QuotaExceededError" === n.name && (this.clear(), this._noop());
							}
						},
						get: function (e) {
							return (
								this.isExpired(e) && this.remove(e),
								r(this.ls.getItem(this._prefix(e)))
							);
						},
						set: function (e, n, r) {
							return (
								t.isNumber(r)
									? this._safeSet(this._ttlKey(e), o(i() + r))
									: this.ls.removeItem(this._ttlKey(e)),
								this._safeSet(this._prefix(e), o(n))
							);
						},
						remove: function (e) {
							return (
								this.ls.removeItem(this._ttlKey(e)),
								this.ls.removeItem(this._prefix(e)),
								this
							);
						},
						clear: function () {
							var e,
								t = s(this.keyMatcher);
							for (e = t.length; e--; ) this.remove(t[e]);
							return this;
						},
						isExpired: function (e) {
							var n = r(this.ls.getItem(this._ttlKey(e)));
							return !!(t.isNumber(n) && i() > n);
						},
					}),
					n
				);
			})(),
			s = (function () {
				"use strict";
				function n(e) {
					(e = e || {}),
						(this.cancelled = !1),
						(this.lastReq = null),
						(this._send = e.transport),
						(this._get = e.limiter ? e.limiter(this._get) : this._get),
						(this._cache = !1 === e.cache ? new o(0) : a);
				}
				var i = 0,
					r = {},
					s = 6,
					a = new o(10);
				return (
					(n.setMaxPendingRequests = function (e) {
						s = e;
					}),
					(n.resetCache = function () {
						a.reset();
					}),
					t.mixin(n.prototype, {
						_fingerprint: function (t) {
							return (t = t || {}).url + t.type + e.param(t.data || {});
						},
						_get: function (e, t) {
							function n(e) {
								t(null, e), u._cache.set(l, e);
							}
							function o() {
								t(!0);
							}
							function a() {
								i--,
									delete r[l],
									u.onDeckRequestArgs &&
										(u._get.apply(u, u.onDeckRequestArgs),
										(u.onDeckRequestArgs = null));
							}
							var l,
								c,
								u = this;
							(l = this._fingerprint(e)),
								this.cancelled ||
									l !== this.lastReq ||
									((c = r[l])
										? c.done(n).fail(o)
										: s > i
										? (i++, (r[l] = this._send(e).done(n).fail(o).always(a)))
										: (this.onDeckRequestArgs = [].slice.call(arguments, 0)));
						},
						get: function (n, i) {
							var o, r;
							(i = i || e.noop),
								(n = t.isString(n) ? { url: n } : n || {}),
								(r = this._fingerprint(n)),
								(this.cancelled = !1),
								(this.lastReq = r),
								(o = this._cache.get(r)) ? i(null, o) : this._get(n, i);
						},
						cancel: function () {
							this.cancelled = !0;
						},
					}),
					n
				);
			})(),
			a = (window.SearchIndex = (function () {
				"use strict";
				function n(n) {
					((n = n || {}).datumTokenizer && n.queryTokenizer) ||
						e.error("datumTokenizer and queryTokenizer are both required"),
						(this.identify = n.identify || t.stringify),
						(this.datumTokenizer = n.datumTokenizer),
						(this.queryTokenizer = n.queryTokenizer),
						this.reset();
				}
				function i(e) {
					return (
						(e = t.filter(e, function (e) {
							return !!e;
						})),
						t.map(e, function (e) {
							return e.toLowerCase();
						})
					);
				}
				function o() {
					var e = {};
					return (e[l] = []), (e[a] = {}), e;
				}
				function r(e) {
					for (var t = {}, n = [], i = 0, o = e.length; o > i; i++)
						t[e[i]] || ((t[e[i]] = !0), n.push(e[i]));
					return n;
				}
				function s(e, t) {
					var n = 0,
						i = 0,
						o = [];
					(e = e.sort()), (t = t.sort());
					for (var r = e.length, s = t.length; r > n && s > i; )
						e[n] < t[i] ? n++ : e[n] > t[i] ? i++ : (o.push(e[n]), n++, i++);
					return o;
				}
				var a = "c",
					l = "i";
				return (
					t.mixin(n.prototype, {
						bootstrap: function (e) {
							(this.datums = e.datums), (this.trie = e.trie);
						},
						add: function (e) {
							var n = this;
							(e = t.isArray(e) ? e : [e]),
								t.each(e, function (e) {
									var r, s;
									(n.datums[(r = n.identify(e))] = e),
										(s = i(n.datumTokenizer(e))),
										t.each(s, function (e) {
											var t, i, s;
											for (t = n.trie, i = e.split(""); (s = i.shift()); )
												(t = t[a][s] || (t[a][s] = o()))[l].push(r);
										});
								});
						},
						get: function (e) {
							var n = this;
							return t.map(e, function (e) {
								return n.datums[e];
							});
						},
						search: function (e) {
							var n,
								o,
								c = this;
							return (
								(n = i(this.queryTokenizer(e))),
								t.each(n, function (e) {
									var t, n, i, r;
									if (o && 0 === o.length) return !1;
									for (t = c.trie, n = e.split(""); t && (i = n.shift()); )
										t = t[a][i];
									return t && 0 === n.length
										? ((r = t[l].slice(0)), void (o = o ? s(o, r) : r))
										: ((o = []), !1);
								}),
								o
									? t.map(r(o), function (e) {
											return c.datums[e];
									  })
									: []
							);
						},
						all: function () {
							var e = [];
							for (var t in this.datums) e.push(this.datums[t]);
							return e;
						},
						reset: function () {
							(this.datums = {}), (this.trie = o());
						},
						serialize: function () {
							return { datums: this.datums, trie: this.trie };
						},
					}),
					n
				);
			})()),
			l = (function () {
				"use strict";
				function e(e) {
					(this.url = e.url),
						(this.ttl = e.ttl),
						(this.cache = e.cache),
						(this.prepare = e.prepare),
						(this.transform = e.transform),
						(this.transport = e.transport),
						(this.thumbprint = e.thumbprint),
						(this.storage = new r(e.cacheKey));
				}
				var n;
				return (
					(n = {
						data: "data",
						protocol: "protocol",
						thumbprint: "thumbprint",
					}),
					t.mixin(e.prototype, {
						_settings: function () {
							return { url: this.url, type: "GET", dataType: "json" };
						},
						store: function (e) {
							this.cache &&
								(this.storage.set(n.data, e, this.ttl),
								this.storage.set(n.protocol, location.protocol, this.ttl),
								this.storage.set(n.thumbprint, this.thumbprint, this.ttl));
						},
						fromCache: function () {
							var e,
								t = {};
							return this.cache
								? ((t.data = this.storage.get(n.data)),
								  (t.protocol = this.storage.get(n.protocol)),
								  (t.thumbprint = this.storage.get(n.thumbprint)),
								  (e =
										t.thumbprint !== this.thumbprint ||
										t.protocol !== location.protocol),
								  t.data && !e ? t.data : null)
								: null;
						},
						fromNetwork: function (e) {
							function t() {
								e(!0);
							}
							function n(t) {
								e(null, o.transform(t));
							}
							var i,
								o = this;
							e &&
								((i = this.prepare(this._settings())),
								this.transport(i).fail(t).done(n));
						},
						clear: function () {
							return this.storage.clear(), this;
						},
					}),
					e
				);
			})(),
			c = (function () {
				"use strict";
				function e(e) {
					(this.url = e.url),
						(this.prepare = e.prepare),
						(this.transform = e.transform),
						(this.transport = new s({
							cache: e.cache,
							limiter: e.limiter,
							transport: e.transport,
						}));
				}
				return (
					t.mixin(e.prototype, {
						_settings: function () {
							return { url: this.url, type: "GET", dataType: "json" };
						},
						get: function (e, t) {
							function n(e, n) {
								t(e ? [] : o.transform(n));
							}
							var i,
								o = this;
							if (t)
								return (
									(e = e || ""),
									(i = this.prepare(e, this._settings())),
									this.transport.get(i, n)
								);
						},
						cancelLastRequest: function () {
							this.transport.cancel();
						},
					}),
					e
				);
			})(),
			u = (function () {
				"use strict";
				function i(i) {
					var o;
					return i
						? ((o = {
								url: null,
								ttl: 864e5,
								cache: !0,
								cacheKey: null,
								thumbprint: "",
								prepare: t.identity,
								transform: t.identity,
								transport: null,
						  }),
						  (i = t.isString(i) ? { url: i } : i),
						  !(i = t.mixin(o, i)).url &&
								e.error("prefetch requires url to be set"),
						  (i.transform = i.filter || i.transform),
						  (i.cacheKey = i.cacheKey || i.url),
						  (i.thumbprint = n + i.thumbprint),
						  (i.transport = i.transport ? a(i.transport) : e.ajax),
						  i)
						: null;
				}
				function o(n) {
					var i;
					if (n)
						return (
							(i = {
								url: null,
								cache: !0,
								prepare: null,
								replace: null,
								wildcard: null,
								limiter: null,
								rateLimitBy: "debounce",
								rateLimitWait: 300,
								transform: t.identity,
								transport: null,
							}),
							(n = t.isString(n) ? { url: n } : n),
							!(n = t.mixin(i, n)).url &&
								e.error("remote requires url to be set"),
							(n.transform = n.filter || n.transform),
							(n.prepare = r(n)),
							(n.limiter = s(n)),
							(n.transport = n.transport ? a(n.transport) : e.ajax),
							delete n.replace,
							delete n.wildcard,
							delete n.rateLimitBy,
							delete n.rateLimitWait,
							n
						);
				}
				function r(e) {
					function t(e, t) {
						return (t.url = r(t.url, e)), t;
					}
					function n(e, t) {
						return (t.url = t.url.replace(s, encodeURIComponent(e))), t;
					}
					function i(e, t) {
						return t;
					}
					var o, r, s;
					return (
						(o = e.prepare),
						(r = e.replace),
						(s = e.wildcard),
						o || (o = r ? t : e.wildcard ? n : i)
					);
				}
				function s(e) {
					function n(e) {
						return function (n) {
							return t.debounce(n, e);
						};
					}
					function i(e) {
						return function (n) {
							return t.throttle(n, e);
						};
					}
					var o, r, s;
					return (
						(o = e.limiter),
						(r = e.rateLimitBy),
						(s = e.rateLimitWait),
						o || (o = /^throttle$/i.test(r) ? i(s) : n(s)),
						o
					);
				}
				function a(n) {
					return function (i) {
						function o(e) {
							t.defer(function () {
								s.resolve(e);
							});
						}
						function r(e) {
							t.defer(function () {
								s.reject(e);
							});
						}
						var s = e.Deferred();
						return n(i, o, r), s;
					};
				}
				return function (n) {
					var r, s;
					return (
						(r = {
							initialize: !0,
							identify: t.stringify,
							datumTokenizer: null,
							queryTokenizer: null,
							sufficient: 5,
							sorter: null,
							local: [],
							prefetch: null,
							remote: null,
						}),
						!(n = t.mixin(r, n || {})).datumTokenizer &&
							e.error("datumTokenizer is required"),
						!n.queryTokenizer && e.error("queryTokenizer is required"),
						(s = n.sorter),
						(n.sorter = s
							? function (e) {
									return e.sort(s);
							  }
							: t.identity),
						(n.local = t.isFunction(n.local) ? n.local() : n.local),
						(n.prefetch = i(n.prefetch)),
						(n.remote = o(n.remote)),
						n
					);
				};
			})();
		return (function () {
			"use strict";
			function n(e) {
				(e = u(e)),
					(this.sorter = e.sorter),
					(this.identify = e.identify),
					(this.sufficient = e.sufficient),
					(this.local = e.local),
					(this.remote = e.remote ? new c(e.remote) : null),
					(this.prefetch = e.prefetch ? new l(e.prefetch) : null),
					(this.index = new a({
						identify: this.identify,
						datumTokenizer: e.datumTokenizer,
						queryTokenizer: e.queryTokenizer,
					})),
					!1 !== e.initialize && this.initialize();
			}
			var o;
			return (
				(o = window && window.Bloodhound),
				(n.noConflict = function () {
					return window && (window.Bloodhound = o), n;
				}),
				(n.tokenizers = i),
				t.mixin(n.prototype, {
					__ttAdapter: function () {
						function e(e, t, i) {
							return n.search(e, t, i);
						}
						function t(e, t) {
							return n.search(e, t);
						}
						var n = this;
						return this.remote ? e : t;
					},
					_loadPrefetch: function () {
						function t(e, t) {
							return e
								? n.reject()
								: (o.add(t),
								  o.prefetch.store(o.index.serialize()),
								  void n.resolve());
						}
						var n,
							i,
							o = this;
						return (
							(n = e.Deferred()),
							this.prefetch
								? (i = this.prefetch.fromCache())
									? (this.index.bootstrap(i), n.resolve())
									: this.prefetch.fromNetwork(t)
								: n.resolve(),
							n.promise()
						);
					},
					_initialize: function () {
						function e() {
							t.add(t.local);
						}
						var t = this;
						return (
							this.clear(),
							(this.initPromise = this._loadPrefetch()).done(e),
							this.initPromise
						);
					},
					initialize: function (e) {
						return !this.initPromise || e
							? this._initialize()
							: this.initPromise;
					},
					add: function (e) {
						return this.index.add(e), this;
					},
					get: function (e) {
						return (
							(e = t.isArray(e) ? e : [].slice.call(arguments)),
							this.index.get(e)
						);
					},
					search: function (e, n, i) {
						function o(e) {
							var n = [];
							t.each(e, function (e) {
								!t.some(r, function (t) {
									return s.identify(e) === s.identify(t);
								}) && n.push(e);
							}),
								i && i(n);
						}
						var r,
							s = this;
						return (
							(r = this.sorter(this.index.search(e))),
							n(this.remote ? r.slice() : r),
							this.remote && r.length < this.sufficient
								? this.remote.get(e, o)
								: this.remote && this.remote.cancelLastRequest(),
							this
						);
					},
					all: function () {
						return this.index.all();
					},
					clear: function () {
						return this.index.reset(), this;
					},
					clearPrefetchCache: function () {
						return this.prefetch && this.prefetch.clear(), this;
					},
					clearRemoteCache: function () {
						return s.resetCache(), this;
					},
					ttAdapter: function () {
						return this.__ttAdapter();
					},
				}),
				n
			);
		})();
	}),
	(function (e, t) {
		"function" == typeof define && define.amd
			? define("typeahead.js", ["jquery"], function (e) {
					return t(e);
			  })
			: "object" == typeof exports
			? (module.exports = t(require("jquery")))
			: t(jQuery);
	})(0, function (e) {
		var t = (function () {
				"use strict";
				return {
					isMsie: function () {
						return (
							!!/(msie|trident)/i.test(navigator.userAgent) &&
							navigator.userAgent.match(/(msie |rv:)(\d+(.\d+)?)/i)[2]
						);
					},
					isBlankString: function (e) {
						return !e || /^\s*$/.test(e);
					},
					escapeRegExChars: function (e) {
						return e.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
					},
					isString: function (e) {
						return "string" == typeof e;
					},
					isNumber: function (e) {
						return "number" == typeof e;
					},
					isArray: e.isArray,
					isFunction: e.isFunction,
					isObject: e.isPlainObject,
					isUndefined: function (e) {
						return void 0 === e;
					},
					isElement: function (e) {
						return !(!e || 1 !== e.nodeType);
					},
					isJQuery: function (t) {
						return t instanceof e;
					},
					toStr: function (e) {
						return t.isUndefined(e) || null === e ? "" : e + "";
					},
					bind: e.proxy,
					each: function (t, n) {
						function i(e, t) {
							return n(t, e);
						}
						e.each(t, i);
					},
					map: e.map,
					filter: e.grep,
					every: function (t, n) {
						var i = !0;
						return t
							? (e.each(t, function (e, o) {
									return !!(i = n.call(null, o, e, t)) && void 0;
							  }),
							  !!i)
							: i;
					},
					some: function (t, n) {
						var i = !1;
						return t
							? (e.each(t, function (e, o) {
									return !(i = n.call(null, o, e, t)) && void 0;
							  }),
							  !!i)
							: i;
					},
					mixin: e.extend,
					identity: function (e) {
						return e;
					},
					clone: function (t) {
						return e.extend(!0, {}, t);
					},
					getIdGenerator: function () {
						var e = 0;
						return function () {
							return e++;
						};
					},
					templatify: function (t) {
						function n() {
							return String(t);
						}
						return e.isFunction(t) ? t : n;
					},
					defer: function (e) {
						setTimeout(e, 0);
					},
					debounce: function (e, t, n) {
						var i, o;
						return function () {
							var r,
								s,
								a = this,
								l = arguments;
							return (
								(r = function () {
									(i = null), n || (o = e.apply(a, l));
								}),
								(s = n && !i),
								clearTimeout(i),
								(i = setTimeout(r, t)),
								s && (o = e.apply(a, l)),
								o
							);
						};
					},
					throttle: function (e, t) {
						var n, i, o, r, s, a;
						return (
							(s = 0),
							(a = function () {
								(s = new Date()), (o = null), (r = e.apply(n, i));
							}),
							function () {
								var l = new Date(),
									c = t - (l - s);
								return (
									(n = this),
									(i = arguments),
									0 >= c
										? (clearTimeout(o),
										  (o = null),
										  (s = l),
										  (r = e.apply(n, i)))
										: o || (o = setTimeout(a, c)),
									r
								);
							}
						);
					},
					stringify: function (e) {
						return t.isString(e) ? e : JSON.stringify(e);
					},
					noop: function () {},
				};
			})(),
			n = (function () {
				"use strict";
				function e(e) {
					var s, a;
					return (
						(a = t.mixin({}, r, e)),
						{
							css: (s = { css: o(), classes: a, html: n(a), selectors: i(a) })
								.css,
							html: s.html,
							classes: s.classes,
							selectors: s.selectors,
							mixin: function (e) {
								t.mixin(e, s);
							},
						}
					);
				}
				function n(e) {
					return {
						wrapper: '<span class="' + e.wrapper + '"></span>',
						menu: '<div class="' + e.menu + '"></div>',
					};
				}
				function i(e) {
					var n = {};
					return (
						t.each(e, function (e, t) {
							n[t] = "." + e;
						}),
						n
					);
				}
				function o() {
					var e = {
						wrapper: { position: "relative", display: "inline-block" },
						hint: {
							position: "absolute",
							top: "0",
							left: "0",
							borderColor: "transparent",
							boxShadow: "none",
							opacity: "1",
						},
						input: {
							position: "relative",
							verticalAlign: "top",
							backgroundColor: "transparent",
						},
						inputWithNoHint: { position: "relative", verticalAlign: "top" },
						menu: {
							position: "absolute",
							top: "100%",
							left: "0",
							zIndex: "100",
							display: "none",
						},
						ltr: { left: "0", right: "auto" },
						rtl: { left: "auto", right: " 0" },
					};
					return (
						t.isMsie() &&
							t.mixin(e.input, {
								backgroundImage:
									"url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)",
							}),
						e
					);
				}
				var r = {
					wrapper: "twitter-typeahead",
					input: "tt-input",
					hint: "tt-hint",
					menu: "tt-menu",
					dataset: "tt-dataset",
					suggestion: "tt-suggestion",
					selectable: "tt-selectable",
					empty: "tt-empty",
					open: "tt-open",
					cursor: "tt-cursor",
					highlight: "tt-highlight",
				};
				return e;
			})(),
			i = (function () {
				"use strict";
				function n(t) {
					(t && t.el) || e.error("EventBus initialized without el"),
						(this.$el = e(t.el));
				}
				var i, o;
				return (
					(i = "typeahead:"),
					(o = {
						render: "rendered",
						cursorchange: "cursorchanged",
						select: "selected",
						autocomplete: "autocompleted",
					}),
					t.mixin(n.prototype, {
						_trigger: function (t, n) {
							var o;
							return (
								(o = e.Event(i + t)),
								(n = n || []).unshift(o),
								this.$el.trigger.apply(this.$el, n),
								o
							);
						},
						before: function (e) {
							var t;
							return (
								(t = [].slice.call(arguments, 1)),
								this._trigger("before" + e, t).isDefaultPrevented()
							);
						},
						trigger: function (e) {
							var t;
							this._trigger(e, [].slice.call(arguments, 1)),
								(t = o[e]) && this._trigger(t, [].slice.call(arguments, 1));
						},
					}),
					n
				);
			})(),
			o = (function () {
				"use strict";
				function e(e, t, n, i) {
					var o;
					if (!n) return this;
					for (
						t = t.split(l),
							n = i ? a(n, i) : n,
							this._callbacks = this._callbacks || {};
						(o = t.shift());

					)
						(this._callbacks[o] = this._callbacks[o] || {
							sync: [],
							async: [],
						}),
							this._callbacks[o][e].push(n);
					return this;
				}
				function t(t, n, i) {
					return e.call(this, "async", t, n, i);
				}
				function n(t, n, i) {
					return e.call(this, "sync", t, n, i);
				}
				function i(e) {
					var t;
					if (!this._callbacks) return this;
					for (e = e.split(l); (t = e.shift()); ) delete this._callbacks[t];
					return this;
				}
				function o(e) {
					var t, n, i, o, s;
					if (!this._callbacks) return this;
					for (
						e = e.split(l), i = [].slice.call(arguments, 1);
						(t = e.shift()) && (n = this._callbacks[t]);

					)
						(o = r(n.sync, this, [t].concat(i))),
							(s = r(n.async, this, [t].concat(i))),
							o() && c(s);
					return this;
				}
				function r(e, t, n) {
					function i() {
						for (var i, o = 0, r = e.length; !i && r > o; o += 1)
							i = !1 === e[o].apply(t, n);
						return !i;
					}
					return i;
				}
				function s() {
					return window.setImmediate
						? function (e) {
								setImmediate(function () {
									e();
								});
						  }
						: function (e) {
								setTimeout(function () {
									e();
								}, 0);
						  };
				}
				function a(e, t) {
					return e.bind
						? e.bind(t)
						: function () {
								e.apply(t, [].slice.call(arguments, 0));
						  };
				}
				var l = /\s+/,
					c = s();
				return { onSync: n, onAsync: t, off: i, trigger: o };
			})(),
			r = (function (e) {
				"use strict";
				function n(e, n, i) {
					for (var o, r = [], s = 0, a = e.length; a > s; s++)
						r.push(t.escapeRegExChars(e[s]));
					return (
						(o = i ? "\\b(" + r.join("|") + ")\\b" : "(" + r.join("|") + ")"),
						n ? new RegExp(o) : new RegExp(o, "i")
					);
				}
				var i = {
					node: null,
					pattern: null,
					tagName: "strong",
					className: null,
					wordsOnly: !1,
					caseSensitive: !1,
				};
				return function (o) {
					function r(t) {
						var n, i, r;
						return (
							(n = a.exec(t.data)) &&
								((r = e.createElement(o.tagName)),
								o.className && (r.className = o.className),
								(i = t.splitText(n.index)).splitText(n[0].length),
								r.appendChild(i.cloneNode(!0)),
								t.parentNode.replaceChild(r, i)),
							!!n
						);
					}
					function s(e, t) {
						for (var n, i = 3, o = 0; o < e.childNodes.length; o++)
							(n = e.childNodes[o]).nodeType === i
								? (o += t(n) ? 1 : 0)
								: s(n, t);
					}
					var a;
					(o = t.mixin({}, i, o)).node &&
						o.pattern &&
						((o.pattern = t.isArray(o.pattern) ? o.pattern : [o.pattern]),
						(a = n(o.pattern, o.caseSensitive, o.wordsOnly)),
						s(o.node, r));
				};
			})(window.document),
			s = (function () {
				"use strict";
				function n(n, o) {
					(n = n || {}).input || e.error("input is missing"),
						o.mixin(this),
						(this.$hint = e(n.hint)),
						(this.$input = e(n.input)),
						(this.query = this.$input.val()),
						(this.queryWhenFocused = this.hasFocus() ? this.query : null),
						(this.$overflowHelper = i(this.$input)),
						this._checkLanguageDirection(),
						0 === this.$hint.length &&
							(this.setHint = this.getHint = this.clearHint = this.clearHintIfInvalid =
								t.noop);
				}
				function i(t) {
					return e('<pre aria-hidden="true"></pre>')
						.css({
							position: "absolute",
							visibility: "hidden",
							whiteSpace: "pre",
							fontFamily: t.css("font-family"),
							fontSize: t.css("font-size"),
							fontStyle: t.css("font-style"),
							fontVariant: t.css("font-variant"),
							fontWeight: t.css("font-weight"),
							wordSpacing: t.css("word-spacing"),
							letterSpacing: t.css("letter-spacing"),
							textIndent: t.css("text-indent"),
							textRendering: t.css("text-rendering"),
							textTransform: t.css("text-transform"),
						})
						.insertAfter(t);
				}
				function r(e, t) {
					return n.normalizeQuery(e) === n.normalizeQuery(t);
				}
				function s(e) {
					return e.altKey || e.ctrlKey || e.metaKey || e.shiftKey;
				}
				var a;
				return (
					(a = {
						9: "tab",
						27: "esc",
						37: "left",
						39: "right",
						13: "enter",
						38: "up",
						40: "down",
					}),
					(n.normalizeQuery = function (e) {
						return t
							.toStr(e)
							.replace(/^\s*/g, "")
							.replace(/\s{2,}/g, " ");
					}),
					t.mixin(n.prototype, o, {
						_onBlur: function () {
							this.resetInputValue(), this.trigger("blurred");
						},
						_onFocus: function () {
							(this.queryWhenFocused = this.query), this.trigger("focused");
						},
						_onKeydown: function (e) {
							var t = a[e.which || e.keyCode];
							this._managePreventDefault(t, e),
								t && this._shouldTrigger(t, e) && this.trigger(t + "Keyed", e);
						},
						_onInput: function () {
							this._setQuery(this.getInputValue()),
								this.clearHintIfInvalid(),
								this._checkLanguageDirection();
						},
						_managePreventDefault: function (e, t) {
							var n;
							switch (e) {
								case "up":
								case "down":
									n = !s(t);
									break;
								default:
									n = !1;
							}
							n && t.preventDefault();
						},
						_shouldTrigger: function (e, t) {
							var n;
							switch (e) {
								case "tab":
									n = !s(t);
									break;
								default:
									n = !0;
							}
							return n;
						},
						_checkLanguageDirection: function () {
							var e = (this.$input.css("direction") || "ltr").toLowerCase();
							this.dir !== e &&
								((this.dir = e),
								this.$hint.attr("dir", e),
								this.trigger("langDirChanged", e));
						},
						_setQuery: function (e, t) {
							var n, i;
							(i = !!(n = r(e, this.query)) && this.query.length !== e.length),
								(this.query = e),
								t || n
									? !t && i && this.trigger("whitespaceChanged", this.query)
									: this.trigger("queryChanged", this.query);
						},
						bind: function () {
							var e,
								n,
								i,
								o,
								r = this;
							return (
								(e = t.bind(this._onBlur, this)),
								(n = t.bind(this._onFocus, this)),
								(i = t.bind(this._onKeydown, this)),
								(o = t.bind(this._onInput, this)),
								this.$input
									.on("blur.tt", e)
									.on("focus.tt", n)
									.on("keydown.tt", i),
								!t.isMsie() || t.isMsie() > 9
									? this.$input.on("input.tt", o)
									: this.$input.on(
											"keydown.tt keypress.tt cut.tt paste.tt",
											function (e) {
												a[e.which || e.keyCode] ||
													t.defer(t.bind(r._onInput, r, e));
											}
									  ),
								this
							);
						},
						focus: function () {
							this.$input.focus();
						},
						blur: function () {
							this.$input.blur();
						},
						getLangDir: function () {
							return this.dir;
						},
						getQuery: function () {
							return this.query || "";
						},
						setQuery: function (e, t) {
							this.setInputValue(e), this._setQuery(e, t);
						},
						hasQueryChangedSinceLastFocus: function () {
							return this.query !== this.queryWhenFocused;
						},
						getInputValue: function () {
							return this.$input.val();
						},
						setInputValue: function (e) {
							this.$input.val(e),
								this.clearHintIfInvalid(),
								this._checkLanguageDirection();
						},
						resetInputValue: function () {
							this.setInputValue(this.query);
						},
						getHint: function () {
							return this.$hint.val();
						},
						setHint: function (e) {
							this.$hint.val(e);
						},
						clearHint: function () {
							this.setHint("");
						},
						clearHintIfInvalid: function () {
							var e, t, n;
							(n =
								(e = this.getInputValue()) !== (t = this.getHint()) &&
								0 === t.indexOf(e)),
								!("" !== e && n && !this.hasOverflow()) && this.clearHint();
						},
						hasFocus: function () {
							return this.$input.is(":focus");
						},
						hasOverflow: function () {
							var e = this.$input.width() - 2;
							return (
								this.$overflowHelper.text(this.getInputValue()),
								this.$overflowHelper.width() >= e
							);
						},
						isCursorAtEnd: function () {
							var e, n, i;
							return (
								(e = this.$input.val().length),
								(n = this.$input[0].selectionStart),
								t.isNumber(n)
									? n === e
									: !document.selection ||
									  ((i = document.selection.createRange()).moveStart(
											"character",
											-e
									  ),
									  e === i.text.length)
							);
						},
						destroy: function () {
							this.$hint.off(".tt"),
								this.$input.off(".tt"),
								this.$overflowHelper.remove(),
								(this.$hint = this.$input = this.$overflowHelper = e("<div>"));
						},
					}),
					n
				);
			})(),
			a = (function () {
				"use strict";
				function n(n, o) {
					((n = n || {}).templates = n.templates || {}),
						(n.templates.notFound = n.templates.notFound || n.templates.empty),
						n.source || e.error("missing source"),
						n.node || e.error("missing node"),
						n.name && !a(n.name) && e.error("invalid dataset name: " + n.name),
						o.mixin(this),
						(this.highlight = !!n.highlight),
						(this.name = n.name || c()),
						(this.limit = n.limit || 5),
						(this.displayFn = i(n.display || n.displayKey)),
						(this.templates = s(n.templates, this.displayFn)),
						(this.source = n.source.__ttAdapter
							? n.source.__ttAdapter()
							: n.source),
						(this.async = t.isUndefined(n.async)
							? this.source.length > 2
							: !!n.async),
						this._resetLastSuggestion(),
						(this.$el = e(n.node)
							.addClass(this.classes.dataset)
							.addClass(this.classes.dataset + "-" + this.name));
				}
				function i(e) {
					function n(t) {
						return t[e];
					}
					return (e = e || t.stringify), t.isFunction(e) ? e : n;
				}
				function s(n, i) {
					function o(t) {
						return e("<div>").text(i(t));
					}
					return {
						notFound: n.notFound && t.templatify(n.notFound),
						pending: n.pending && t.templatify(n.pending),
						header: n.header && t.templatify(n.header),
						footer: n.footer && t.templatify(n.footer),
						suggestion: n.suggestion || o,
					};
				}
				function a(e) {
					return /^[_a-zA-Z0-9-]+$/.test(e);
				}
				var l, c;
				return (
					(l = { val: "tt-selectable-display", obj: "tt-selectable-object" }),
					(c = t.getIdGenerator()),
					(n.extractData = function (t) {
						var n = e(t);
						return n.data(l.obj)
							? { val: n.data(l.val) || "", obj: n.data(l.obj) || null }
							: null;
					}),
					t.mixin(n.prototype, o, {
						_overwrite: function (e, t) {
							(t = t || []).length
								? this._renderSuggestions(e, t)
								: this.async && this.templates.pending
								? this._renderPending(e)
								: !this.async && this.templates.notFound
								? this._renderNotFound(e)
								: this._empty(),
								this.trigger("rendered", this.name, t, !1);
						},
						_append: function (e, t) {
							(t = t || []).length && this.$lastSuggestion.length
								? this._appendSuggestions(e, t)
								: t.length
								? this._renderSuggestions(e, t)
								: !this.$lastSuggestion.length &&
								  this.templates.notFound &&
								  this._renderNotFound(e),
								this.trigger("rendered", this.name, t, !0);
						},
						_renderSuggestions: function (e, t) {
							var n;
							(n = this._getSuggestionsFragment(e, t)),
								(this.$lastSuggestion = n.children().last()),
								this.$el
									.html(n)
									.prepend(this._getHeader(e, t))
									.append(this._getFooter(e, t));
						},
						_appendSuggestions: function (e, t) {
							var n, i;
							(i = (n = this._getSuggestionsFragment(e, t)).children().last()),
								this.$lastSuggestion.after(n),
								(this.$lastSuggestion = i);
						},
						_renderPending: function (e) {
							var t = this.templates.pending;
							this._resetLastSuggestion(),
								t && this.$el.html(t({ query: e, dataset: this.name }));
						},
						_renderNotFound: function (e) {
							var t = this.templates.notFound;
							this._resetLastSuggestion(),
								t && this.$el.html(t({ query: e, dataset: this.name }));
						},
						_empty: function () {
							this.$el.empty(), this._resetLastSuggestion();
						},
						_getSuggestionsFragment: function (n, i) {
							var o,
								s = this;
							return (
								(o = document.createDocumentFragment()),
								t.each(i, function (t) {
									var i, r;
									(r = s._injectQuery(n, t)),
										(i = e(s.templates.suggestion(r))
											.data(l.obj, t)
											.data(l.val, s.displayFn(t))
											.addClass(
												s.classes.suggestion + " " + s.classes.selectable
											)),
										o.appendChild(i[0]);
								}),
								this.highlight &&
									r({ className: this.classes.highlight, node: o, pattern: n }),
								e(o)
							);
						},
						_getFooter: function (e, t) {
							return this.templates.footer
								? this.templates.footer({
										query: e,
										suggestions: t,
										dataset: this.name,
								  })
								: null;
						},
						_getHeader: function (e, t) {
							return this.templates.header
								? this.templates.header({
										query: e,
										suggestions: t,
										dataset: this.name,
								  })
								: null;
						},
						_resetLastSuggestion: function () {
							this.$lastSuggestion = e();
						},
						_injectQuery: function (e, n) {
							return t.isObject(n) ? t.mixin({ _query: e }, n) : n;
						},
						update: function (t) {
							function n(e) {
								s ||
									((s = !0),
									(e = (e || []).slice(0, o.limit)),
									(a = e.length),
									o._overwrite(t, e),
									a < o.limit && o.async && o.trigger("asyncRequested", t));
							}
							function i(n) {
								(n = n || []),
									!r &&
										a < o.limit &&
										((o.cancel = e.noop),
										(a += n.length),
										o._append(t, n.slice(0, o.limit - a)),
										o.async && o.trigger("asyncReceived", t));
							}
							var o = this,
								r = !1,
								s = !1,
								a = 0;
							this.cancel(),
								(this.cancel = function () {
									(r = !0),
										(o.cancel = e.noop),
										o.async && o.trigger("asyncCanceled", t);
								}),
								this.source(t, n, i),
								!s && n([]);
						},
						cancel: e.noop,
						clear: function () {
							this._empty(), this.cancel(), this.trigger("cleared");
						},
						isEmpty: function () {
							return this.$el.is(":empty");
						},
						destroy: function () {
							this.$el = e("<div>");
						},
					}),
					n
				);
			})(),
			l = (function () {
				"use strict";
				function n(n, i) {
					function o(t) {
						var n = r.$node.find(t.node).first();
						return (
							(t.node = n.length ? n : e("<div>").appendTo(r.$node)),
							new a(t, i)
						);
					}
					var r = this;
					(n = n || {}).node || e.error("node is required"),
						i.mixin(this),
						(this.$node = e(n.node)),
						(this.query = null),
						(this.datasets = t.map(n.datasets, o));
				}
				return (
					t.mixin(n.prototype, o, {
						_onSelectableClick: function (t) {
							this.trigger("selectableClicked", e(t.currentTarget));
						},
						_onRendered: function (e, t, n, i) {
							this.$node.toggleClass(
								this.classes.empty,
								this._allDatasetsEmpty()
							),
								this.trigger("datasetRendered", t, n, i);
						},
						_onCleared: function () {
							this.$node.toggleClass(
								this.classes.empty,
								this._allDatasetsEmpty()
							),
								this.trigger("datasetCleared");
						},
						_propagate: function () {
							this.trigger.apply(this, arguments);
						},
						_allDatasetsEmpty: function () {
							function e(e) {
								return e.isEmpty();
							}
							return t.every(this.datasets, e);
						},
						_getSelectables: function () {
							return this.$node.find(this.selectors.selectable);
						},
						_removeCursor: function () {
							var e = this.getActiveSelectable();
							e && e.removeClass(this.classes.cursor);
						},
						_ensureVisible: function (e) {
							var t, n, i, o;
							(n = (t = e.position().top) + e.outerHeight(!0)),
								(i = this.$node.scrollTop()),
								(o =
									this.$node.height() +
									parseInt(this.$node.css("paddingTop"), 10) +
									parseInt(this.$node.css("paddingBottom"), 10)),
								0 > t
									? this.$node.scrollTop(i + t)
									: n > o && this.$node.scrollTop(i + (n - o));
						},
						bind: function () {
							var e,
								n = this;
							return (
								(e = t.bind(this._onSelectableClick, this)),
								this.$node.on("click.tt", this.selectors.selectable, e),
								t.each(this.datasets, function (e) {
									e.onSync("asyncRequested", n._propagate, n)
										.onSync("asyncCanceled", n._propagate, n)
										.onSync("asyncReceived", n._propagate, n)
										.onSync("rendered", n._onRendered, n)
										.onSync("cleared", n._onCleared, n);
								}),
								this
							);
						},
						isOpen: function () {
							return this.$node.hasClass(this.classes.open);
						},
						open: function () {
							this.$node.addClass(this.classes.open);
						},
						close: function () {
							this.$node.removeClass(this.classes.open), this._removeCursor();
						},
						setLanguageDirection: function (e) {
							this.$node.attr("dir", e);
						},
						selectableRelativeToCursor: function (e) {
							var t, n, i;
							return (
								(n = this.getActiveSelectable()),
								(t = this._getSelectables()),
								-1 ===
								(i =
									-1 >
									(i =
										(((i = (n ? t.index(n) : -1) + e) + 1) % (t.length + 1)) -
										1)
										? t.length - 1
										: i)
									? null
									: t.eq(i)
							);
						},
						setCursor: function (e) {
							this._removeCursor(),
								(e = e && e.first()) &&
									(e.addClass(this.classes.cursor), this._ensureVisible(e));
						},
						getSelectableData: function (e) {
							return e && e.length ? a.extractData(e) : null;
						},
						getActiveSelectable: function () {
							var e = this._getSelectables()
								.filter(this.selectors.cursor)
								.first();
							return e.length ? e : null;
						},
						getTopSelectable: function () {
							var e = this._getSelectables().first();
							return e.length ? e : null;
						},
						update: function (e) {
							function n(t) {
								t.update(e);
							}
							var i = e !== this.query;
							return i && ((this.query = e), t.each(this.datasets, n)), i;
						},
						empty: function () {
							function e(e) {
								e.clear();
							}
							t.each(this.datasets, e),
								(this.query = null),
								this.$node.addClass(this.classes.empty);
						},
						destroy: function () {
							function n(e) {
								e.destroy();
							}
							this.$node.off(".tt"),
								(this.$node = e("<div>")),
								t.each(this.datasets, n);
						},
					}),
					n
				);
			})(),
			c = (function () {
				"use strict";
				function e() {
					l.apply(this, [].slice.call(arguments, 0));
				}
				var n = l.prototype;
				return (
					t.mixin(e.prototype, l.prototype, {
						open: function () {
							return (
								!this._allDatasetsEmpty() && this._show(),
								n.open.apply(this, [].slice.call(arguments, 0))
							);
						},
						close: function () {
							return (
								this._hide(), n.close.apply(this, [].slice.call(arguments, 0))
							);
						},
						_onRendered: function () {
							return (
								this._allDatasetsEmpty()
									? this._hide()
									: this.isOpen() && this._show(),
								n._onRendered.apply(this, [].slice.call(arguments, 0))
							);
						},
						_onCleared: function () {
							return (
								this._allDatasetsEmpty()
									? this._hide()
									: this.isOpen() && this._show(),
								n._onCleared.apply(this, [].slice.call(arguments, 0))
							);
						},
						setLanguageDirection: function (e) {
							return (
								this.$node.css("ltr" === e ? this.css.ltr : this.css.rtl),
								n.setLanguageDirection.apply(this, [].slice.call(arguments, 0))
							);
						},
						_hide: function () {
							this.$node.hide();
						},
						_show: function () {
							this.$node.css("display", "block");
						},
					}),
					e
				);
			})(),
			u = (function () {
				"use strict";
				function n(n, o) {
					var r, s, a, l, c, u, d, p, h, f, g;
					(n = n || {}).input || e.error("missing input"),
						n.menu || e.error("missing menu"),
						n.eventBus || e.error("missing event bus"),
						o.mixin(this),
						(this.eventBus = n.eventBus),
						(this.minLength = t.isNumber(n.minLength) ? n.minLength : 1),
						(this.input = n.input),
						(this.menu = n.menu),
						(this.enabled = !0),
						(this.active = !1),
						this.input.hasFocus() && this.activate(),
						(this.dir = this.input.getLangDir()),
						this._hacks(),
						this.menu
							.bind()
							.onSync("selectableClicked", this._onSelectableClicked, this)
							.onSync("asyncRequested", this._onAsyncRequested, this)
							.onSync("asyncCanceled", this._onAsyncCanceled, this)
							.onSync("asyncReceived", this._onAsyncReceived, this)
							.onSync("datasetRendered", this._onDatasetRendered, this)
							.onSync("datasetCleared", this._onDatasetCleared, this),
						(r = i(this, "activate", "open", "_onFocused")),
						(s = i(this, "deactivate", "_onBlurred")),
						(a = i(this, "isActive", "isOpen", "_onEnterKeyed")),
						(l = i(this, "isActive", "isOpen", "_onTabKeyed")),
						(c = i(this, "isActive", "_onEscKeyed")),
						(u = i(this, "isActive", "open", "_onUpKeyed")),
						(d = i(this, "isActive", "open", "_onDownKeyed")),
						(p = i(this, "isActive", "isOpen", "_onLeftKeyed")),
						(h = i(this, "isActive", "isOpen", "_onRightKeyed")),
						(f = i(this, "_openIfActive", "_onQueryChanged")),
						(g = i(this, "_openIfActive", "_onWhitespaceChanged")),
						this.input
							.bind()
							.onSync("focused", r, this)
							.onSync("blurred", s, this)
							.onSync("enterKeyed", a, this)
							.onSync("tabKeyed", l, this)
							.onSync("escKeyed", c, this)
							.onSync("upKeyed", u, this)
							.onSync("downKeyed", d, this)
							.onSync("leftKeyed", p, this)
							.onSync("rightKeyed", h, this)
							.onSync("queryChanged", f, this)
							.onSync("whitespaceChanged", g, this)
							.onSync("langDirChanged", this._onLangDirChanged, this);
				}
				function i(e) {
					var n = [].slice.call(arguments, 1);
					return function () {
						var i = [].slice.call(arguments);
						t.each(n, function (t) {
							return e[t].apply(e, i);
						});
					};
				}
				return (
					t.mixin(n.prototype, {
						_hacks: function () {
							var n, i;
							(n = this.input.$input || e("<div>")),
								(i = this.menu.$node || e("<div>")),
								n.on("blur.tt", function (e) {
									var o, r, s;
									(o = document.activeElement),
										(r = i.is(o)),
										(s = i.has(o).length > 0),
										t.isMsie() &&
											(r || s) &&
											(e.preventDefault(),
											e.stopImmediatePropagation(),
											t.defer(function () {
												n.focus();
											}));
								}),
								i.on("mousedown.tt", function (e) {
									e.preventDefault();
								});
						},
						_onSelectableClicked: function (e, t) {
							this.select(t);
						},
						_onDatasetCleared: function () {
							this._updateHint();
						},
						_onDatasetRendered: function (e, t, n, i) {
							this._updateHint(), this.eventBus.trigger("render", n, i, t);
						},
						_onAsyncRequested: function (e, t, n) {
							this.eventBus.trigger("asyncrequest", n, t);
						},
						_onAsyncCanceled: function (e, t, n) {
							this.eventBus.trigger("asynccancel", n, t);
						},
						_onAsyncReceived: function (e, t, n) {
							this.eventBus.trigger("asyncreceive", n, t);
						},
						_onFocused: function () {
							this._minLengthMet() && this.menu.update(this.input.getQuery());
						},
						_onBlurred: function () {
							this.input.hasQueryChangedSinceLastFocus() &&
								this.eventBus.trigger("change", this.input.getQuery());
						},
						_onEnterKeyed: function (e, t) {
							var n;
							(n = this.menu.getActiveSelectable()) &&
								this.select(n) &&
								t.preventDefault();
						},
						_onTabKeyed: function (e, t) {
							var n;
							(n = this.menu.getActiveSelectable())
								? this.select(n) && t.preventDefault()
								: (n = this.menu.getTopSelectable()) &&
								  this.autocomplete(n) &&
								  t.preventDefault();
						},
						_onEscKeyed: function () {
							this.close();
						},
						_onUpKeyed: function () {
							this.moveCursor(-1);
						},
						_onDownKeyed: function () {
							this.moveCursor(1);
						},
						_onLeftKeyed: function () {
							"rtl" === this.dir &&
								this.input.isCursorAtEnd() &&
								this.autocomplete(this.menu.getTopSelectable());
						},
						_onRightKeyed: function () {
							"ltr" === this.dir &&
								this.input.isCursorAtEnd() &&
								this.autocomplete(this.menu.getTopSelectable());
						},
						_onQueryChanged: function (e, t) {
							this._minLengthMet(t) ? this.menu.update(t) : this.menu.empty();
						},
						_onWhitespaceChanged: function () {
							this._updateHint();
						},
						_onLangDirChanged: function (e, t) {
							this.dir !== t &&
								((this.dir = t), this.menu.setLanguageDirection(t));
						},
						_openIfActive: function () {
							this.isActive() && this.open();
						},
						_minLengthMet: function (e) {
							return (
								(e = t.isString(e) ? e : this.input.getQuery() || "").length >=
								this.minLength
							);
						},
						_updateHint: function () {
							var e, n, i, o, r, a;
							(e = this.menu.getTopSelectable()),
								(n = this.menu.getSelectableData(e)),
								(i = this.input.getInputValue()),
								!n || t.isBlankString(i) || this.input.hasOverflow()
									? this.input.clearHint()
									: ((o = s.normalizeQuery(i)),
									  (r = t.escapeRegExChars(o)),
									  (a = new RegExp("^(?:" + r + ")(.+$)", "i").exec(n.val)) &&
											this.input.setHint(i + a[1]));
						},
						isEnabled: function () {
							return this.enabled;
						},
						enable: function () {
							this.enabled = !0;
						},
						disable: function () {
							this.enabled = !1;
						},
						isActive: function () {
							return this.active;
						},
						activate: function () {
							return (
								!!this.isActive() ||
								(!(!this.isEnabled() || this.eventBus.before("active")) &&
									((this.active = !0), this.eventBus.trigger("active"), !0))
							);
						},
						deactivate: function () {
							return (
								!this.isActive() ||
								(!this.eventBus.before("idle") &&
									((this.active = !1),
									this.close(),
									this.eventBus.trigger("idle"),
									!0))
							);
						},
						isOpen: function () {
							return this.menu.isOpen();
						},
						open: function () {
							return (
								this.isOpen() ||
									this.eventBus.before("open") ||
									(this.menu.open(),
									this._updateHint(),
									this.eventBus.trigger("open")),
								this.isOpen()
							);
						},
						close: function () {
							return (
								this.isOpen() &&
									!this.eventBus.before("close") &&
									(this.menu.close(),
									this.input.clearHint(),
									this.input.resetInputValue(),
									this.eventBus.trigger("close")),
								!this.isOpen()
							);
						},
						setVal: function (e) {
							this.input.setQuery(t.toStr(e));
						},
						getVal: function () {
							return this.input.getQuery();
						},
						select: function (e) {
							var t = this.menu.getSelectableData(e);
							return (
								!(!t || this.eventBus.before("select", t.obj)) &&
								(this.input.setQuery(t.val, !0),
								this.eventBus.trigger("select", t.obj),
								this.close(),
								!0)
							);
						},
						autocomplete: function (e) {
							var t, n;
							return (
								(t = this.input.getQuery()),
								!(
									!((n = this.menu.getSelectableData(e)) && t !== n.val) ||
									this.eventBus.before("autocomplete", n.obj)
								) &&
									(this.input.setQuery(n.val),
									this.eventBus.trigger("autocomplete", n.obj),
									!0)
							);
						},
						moveCursor: function (e) {
							var t, n, i, o;
							return (
								(t = this.input.getQuery()),
								(n = this.menu.selectableRelativeToCursor(e)),
								(o = (i = this.menu.getSelectableData(n)) ? i.obj : null),
								!(this._minLengthMet() && this.menu.update(t)) &&
									!this.eventBus.before("cursorchange", o) &&
									(this.menu.setCursor(n),
									i
										? this.input.setInputValue(i.val)
										: (this.input.resetInputValue(), this._updateHint()),
									this.eventBus.trigger("cursorchange", o),
									!0)
							);
						},
						destroy: function () {
							this.input.destroy(), this.menu.destroy();
						},
					}),
					n
				);
			})();
		!(function () {
			"use strict";
			function o(t, n) {
				t.each(function () {
					var t,
						i = e(this);
					(t = i.data(g.typeahead)) && n(t, i);
				});
			}
			function r(e, t) {
				return e
					.clone()
					.addClass(t.classes.hint)
					.removeData()
					.css(t.css.hint)
					.css(d(e))
					.prop("readonly", !0)
					.removeAttr("id name placeholder required")
					.attr({ autocomplete: "off", spellcheck: "false", tabindex: -1 });
			}
			function a(e, t) {
				e.data(g.attrs, {
					dir: e.attr("dir"),
					autocomplete: e.attr("autocomplete"),
					spellcheck: e.attr("spellcheck"),
					style: e.attr("style"),
				}),
					e
						.addClass(t.classes.input)
						.attr({ autocomplete: "off", spellcheck: !1 });
				try {
					!e.attr("dir") && e.attr("dir", "auto");
				} catch (n) {}
				return e;
			}
			function d(e) {
				return {
					backgroundAttachment: e.css("background-attachment"),
					backgroundClip: e.css("background-clip"),
					backgroundColor: e.css("background-color"),
					backgroundImage: e.css("background-image"),
					backgroundOrigin: e.css("background-origin"),
					backgroundPosition: e.css("background-position"),
					backgroundRepeat: e.css("background-repeat"),
					backgroundSize: e.css("background-size"),
				};
			}
			function p(e) {
				var n, i;
				(n = e.data(g.www)),
					(i = e.parent().filter(n.selectors.wrapper)),
					t.each(e.data(g.attrs), function (n, i) {
						t.isUndefined(n) ? e.removeAttr(i) : e.attr(i, n);
					}),
					e
						.removeData(g.typeahead)
						.removeData(g.www)
						.removeData(g.attr)
						.removeClass(n.classes.input),
					i.length && (e.detach().insertAfter(i), i.remove());
			}
			function h(n) {
				var i;
				return (i = t.isJQuery(n) || t.isElement(n) ? e(n).first() : []).length
					? i
					: null;
			}
			var f, g, v;
			(f = e.fn.typeahead),
				(g = { www: "tt-www", attrs: "tt-attrs", typeahead: "tt-typeahead" }),
				(v = {
					initialize: function (o, d) {
						function p() {
							var n, p, v, y, m, b, w, k, x, T, S;
							t.each(d, function (e) {
								e.highlight = !!o.highlight;
							}),
								(n = e(this)),
								(p = e(f.html.wrapper)),
								(v = h(o.hint)),
								(y = h(o.menu)),
								(m = !1 !== o.hint && !v),
								(b = !1 !== o.menu && !y),
								m && (v = r(n, f)),
								b && (y = e(f.html.menu).css(f.css.menu)),
								v && v.val(""),
								(n = a(n, f)),
								(m || b) &&
									(p.css(f.css.wrapper),
									n.css(m ? f.css.input : f.css.inputWithNoHint),
									n
										.wrap(p)
										.parent()
										.prepend(m ? v : null)
										.append(b ? y : null)),
								(S = b ? c : l),
								(w = new i({ el: n })),
								(k = new s({ hint: v, input: n }, f)),
								(x = new S({ node: y, datasets: d }, f)),
								(T = new u(
									{ input: k, menu: x, eventBus: w, minLength: o.minLength },
									f
								)),
								n.data(g.www, f),
								n.data(g.typeahead, T);
						}
						var f;
						return (
							(d = t.isArray(d) ? d : [].slice.call(arguments, 1)),
							(f = n((o = o || {}).classNames)),
							this.each(p)
						);
					},
					isEnabled: function () {
						var e;
						return (
							o(this.first(), function (t) {
								e = t.isEnabled();
							}),
							e
						);
					},
					enable: function () {
						return (
							o(this, function (e) {
								e.enable();
							}),
							this
						);
					},
					disable: function () {
						return (
							o(this, function (e) {
								e.disable();
							}),
							this
						);
					},
					isActive: function () {
						var e;
						return (
							o(this.first(), function (t) {
								e = t.isActive();
							}),
							e
						);
					},
					activate: function () {
						return (
							o(this, function (e) {
								e.activate();
							}),
							this
						);
					},
					deactivate: function () {
						return (
							o(this, function (e) {
								e.deactivate();
							}),
							this
						);
					},
					isOpen: function () {
						var e;
						return (
							o(this.first(), function (t) {
								e = t.isOpen();
							}),
							e
						);
					},
					open: function () {
						return (
							o(this, function (e) {
								e.open();
							}),
							this
						);
					},
					close: function () {
						return (
							o(this, function (e) {
								e.close();
							}),
							this
						);
					},
					select: function (t) {
						var n = !1,
							i = e(t);
						return (
							o(this.first(), function (e) {
								n = e.select(i);
							}),
							n
						);
					},
					autocomplete: function (t) {
						var n = !1,
							i = e(t);
						return (
							o(this.first(), function (e) {
								n = e.autocomplete(i);
							}),
							n
						);
					},
					moveCursor: function (e) {
						var t = !1;
						return (
							o(this.first(), function (n) {
								t = n.moveCursor(e);
							}),
							t
						);
					},
					val: function (e) {
						var t;
						return arguments.length
							? (o(this, function (t) {
									t.setVal(e);
							  }),
							  this)
							: (o(this.first(), function (e) {
									t = e.getVal();
							  }),
							  t);
					},
					destroy: function () {
						return (
							o(this, function (e, t) {
								p(t), e.destroy();
							}),
							this
						);
					},
				}),
				(e.fn.typeahead = function (e) {
					return v[e]
						? v[e].apply(this, [].slice.call(arguments, 1))
						: v.initialize.apply(this, arguments);
				}),
				(e.fn.typeahead.noConflict = function () {
					return (e.fn.typeahead = f), this;
				});
		})();
	}),
	function () {}.call(
		("object" == typeof window && window) ||
			("object" == typeof self && self) ||
			("object" == typeof global && global) ||
			{}
	);
var enquiryFormCoords,
	navbarHeight = 114;
document.getElementById("banner-enquiry-form") &&
	(enquiryFormCoords = document
		.getElementById("banner-enquiry-form")
		.getBoundingClientRect());
var viewportWidth = Math.max(
	document.documentElement.clientWidth,
	window.innerWidth || 0
);
const sectionCardsNavDropdown = $("#section-cards-navigator .slide"),
	headerMobileNavOpener = $("#header-mobile-nav-opener"),
	mobileNavDrop = $("#mobile-nav-drop");
var scrollToTopButton = $("#go-top-button"),
	callbtn = $("#show-sidecall-button");
$(document).ready(() => {
	(stickyElement =
		$("#sidebar-sticky-element").offset() &&
		$("#sidebar-sticky-element").offset().top - 100),
		$(".header-submenu-picker").on("click", function () {
			var e = $(this).attr("data-submenu");
			$(".tranding-quick-list .slide").removeClass("active-slide"),
				$(this).parent().addClass("active-slide"),
				$(".submenu-holder").hide(),
				$("#" + e).show(),
				$("#nav-menus-wrap").scrollTop(0);
		}),
		$(".subcategory-trending-list-item").on("click", function () {
			"#" === $(this).children()[0].getAttribute("href") &&
				$(this).toggleClass("expanded-item");
		}),
		scrollToTopButton.on("click", function (e) {
			e.preventDefault(), $("html, body").animate({ scrollTop: 0 }, "1");
		});
}),
	$("#section-cards-navigator .section-card-title").click(function (e) {
		$("#section-cards-navigator .opener .value").html(e.target.innerHTML);
	}),
	$(".opener").on("click", (e) => {
		e.stopPropagation(), $("ul.slide").toggleClass("showBlock");
	}),
	$(".app-bar-show").on("click", () => {
		$("#header .header-base").toggleClass("show-app-bar");
	}),
	$("#header_user_profile").on("click", (e) => {
		e.stopPropagation(), $("#header_user_profile").toggleClass("open");
	}),
	$(window).on("click", (e) => {
		sectionCardsNavDropdown.removeClass("showBlock"),
			$(e.target).closest(mobileNavDrop).length ||
				($("body").find(mobileNavDrop).removeClass("slideIn"),
				$("body").find(headerMobileNavOpener).removeClass("hamburger-slide-in"),
				$("body").removeClass("has-modal")),
			$(e.target).closest(".contact-details-holder").length ||
				$("body")
					.find(".contact-details-holder")
					.removeClass("visible-details");
	}),
	$(function () {
		initScrollHandler();
	}),
	$(document).on("click", ".onclick-link", function (e) {
		var t = e.currentTarget.getAttribute("data-href");
		if (t && t.length > 0)
			if (0 == t.indexOf("http://") || 0 == t.indexOf("https://"))
				window.open(t, "_blank");
			else {
				var n = [window.location.origin, t].join("");
				window.open(n, "_blank");
			}
		e.stopPropagation();
	}),
	$(document).on("click", ".onclick-link a", function (e) {
		e.stopPropagation();
	});
var adasdashdkasjda = 1;
$(document).ready(function () {
	if (
		($("#global-search-form").submit(function (e) {
			"" == $("#tour_search").val() &&
				(e.preventDefault(),
				(window.location = $("#slug-search-text").attr(
					"data-destination-url"
				)));
		}),
		$("#slug-search-text").length > 0)
	) {
		var e;
		$("#tour_destination_slug_info").length > 0 &&
			(e = $("#tour_destination_slug_info").attr("data-destination_slug"));
		var t = new Bloodhound({
				datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
				queryTokenizer: Bloodhound.tokenizers.whitespace,
				remote: {
					url: "/destination_suggestions",
					replace: function (t, n) {
						return search_url(t, e, n);
					},
				},
			}),
			n = new Bloodhound({
				datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
				queryTokenizer: Bloodhound.tokenizers.whitespace,
				remote: {
					url: "/sub_categories",
					replace: function (t, n) {
						return search_url(t, e, n);
					},
				},
			}),
			i = new Bloodhound({
				datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
				queryTokenizer: Bloodhound.tokenizers.whitespace,
				remote: {
					url: "/tours",
					replace: function (t, n) {
						return search_url(t, e, n);
					},
				},
			});
		new Bloodhound({
			datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
			queryTokenizer: Bloodhound.tokenizers.whitespace,
			remote: {
				url: "/collections",
				replace: function (t, n) {
					return search_url(t, e, n);
				},
			},
		});
		$("#slug-search-text").typeahead(
			{ highlight: !0 },
			{
				name: "destination_suggestions",
				displayKey: "name",
				source: t,
				limit: 10,
			},
			{
				name: "sub_categories",
				displayKey: "name",
				source: n,
				limit: 10,
				templates: { header: '<h3 class="search-title">Tags</h3>' },
			},
			{
				name: "tours",
				displayKey: "name",
				limit: 10,
				source: i,
				templates: { header: '<h3 class="search-title">Tours</h3>' },
			}
		),
			$("input[name='search']").keyup(function (e) {
				e.target.value.length > 0
					? $("#navSearchClear").show()
					: $("#navSearchClear").hide();
			}),
			$("#navSearchClear").click(function () {
				$("input[name='search']").value = "";
			}),
			$("#global-search-form").bind("typeahead:selected", function (e, t) {
				var n = $.parseJSON(JSON.stringify(t));
				window.location = n.redirect_url;
			}),
			$("#global-search-form .icon-cancel-music").click(function () {
				$("#slug-search-text").typeahead("val", ""), $(this).hide();
			});
	}
});
adasdashdkasjda = 1;
var lazyload = function (e) {
	new IntersectionObserver(
		function (e, t) {
			$.each(e, function (e, n) {
				if (n.isIntersecting) {
					var i = n.target;
					if ("none" != $(i).css("display")) {
						var o = i.getAttribute("data-src"),
							r = i.getAttribute("data-srcset");
						i.setAttribute("src", o),
							i.setAttribute("srcset", r),
							i.classList.add("lazy-image-loaded");
					}
					t.unobserve(i);
				}
			});
		},
		{ rootMargin: "0px 0px 80px 0px" }
	).observe(e);
};
adasdashdkasjda = 1;
$("img.lazy-image").each(function (e, t) {
	lazyload(t);
});
var lazyloadbg = function (e) {
	new IntersectionObserver(function (e, t) {
		$.each(e, function (e, n) {
			if (n.isIntersecting) {
				var i = n.target;
				i.classList.remove("lazy-bg"), t.unobserve(i);
			}
		});
	}).observe(e);
};
$(".lazy-bg").each(function (e, t) {
	lazyloadbg(t);
});
var lazyload_picture = function (e) {
	new IntersectionObserver(
		function (e, t) {
			$.each(e, function (e, n) {
				if (n.isIntersecting) {
					var i = n.target;
					$(i)
						.find("source")
						.each(function (e, t) {
							var n = t.getAttribute("data-srcset");
							t.setAttribute("srcset", n);
						});
					var o = $(i).find("img").attr("data-srcset");
					$(i).find("img").attr("srcset", o),
						i.classList.add("lazy-picture-loaded"),
						t.unobserve(i);
				}
			});
		},
		{ rootMargin: "0px 0px 80px 0px" }
	).observe(e);
};
$("picture.lazy-picture").each(function (e, t) {
	lazyload_picture(t);
});
var lazyloadIframe = function (e) {
	new IntersectionObserver(function (e, t) {
		$.each(e, function (e, n) {
			if (n.isIntersecting) {
				var i = n.target,
					o = i.getAttribute("data-src");
				i.setAttribute("src", o), t.unobserve(i);
			}
		});
	}).observe(e);
};
$("iframe[data-src]").each(function (e, t) {
	lazyloadIframe(t);
});
var lazyloadScript = function (e) {
	new IntersectionObserver(function (e, t) {
		$.each(e, function (e, n) {
			if (n.isIntersecting) {
				var i = $(n.target).find("script[data-src]");
				$.each(i, function (e, n) {
					var i = n.getAttribute("data-src");
					n.setAttribute("src", i), t.unobserve(n);
				});
			}
		});
	}).observe(e);
};
$(".ads-script-container").each(function (e, t) {
	lazyloadScript(t);
});
var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy-video"));
if ("IntersectionObserver" in window) {
	var lazyVideoObserver = new IntersectionObserver(function (e) {
		e.forEach(function (e) {
			if (e.isIntersecting) {
				const i = e.target.dataset.poster;
				for (var t in ((e.target.poster = i), e.target.children)) {
					var n = e.target.children[t];
					"string" == typeof n.tagName &&
						"SOURCE" === n.tagName &&
						(n.src = n.dataset.src);
				}
				e.target.load(),
					e.target.classList.remove("lazy-video"),
					lazyVideoObserver.unobserve(e.target);
			}
		});
	});
	lazyVideos.forEach(function (e) {
		lazyVideoObserver.observe(e);
	});
}
var lazyloadReadMore = function (e) {
	new IntersectionObserver(
		function (t, n) {
			$.each(t, function (t, i) {
				if (i.isIntersecting) {
					var o = i.target,
						r = $(o)[0].firstElementChild,
						s = e.getAttribute("disable-show-more-button"),
						a = e.getAttribute("show-button-on-left-side"),
						l = 100;
					("IFRAME" === r.nodeName ||
						(r.childElementCount > 0 &&
							"IFRAME" === r.firstElementChild.nodeName)) &&
						(l = 460),
						"true" == s
							? ((showMoreLink =
									'<a href="#" class="btn-read-more desktop-hidden mobile-hidden">Show more</a>'),
							  (showLessLink =
									'<a href="#" class="btn-read-more desktop-hidden mobile-hidden">Show less</a>'))
							: "true" == a
							? ((showMoreLink =
									'<a href="#" class="btn btn-sm radius-md">Read more</a>'),
							  (showLessLink =
									'<a href="#" class="btn btn-sm radius-md">Read less</a>'))
							: ((showMoreLink =
									'<a href="#" class="btn btn-sm radius-md float-right">Read more</a>'),
							  (showLessLink =
									'<a href="#" class="btn btn-sm radius-md float-right">Read less</a>')),
						$(o).readmore({
							speed: 360,
							collapsedHeight: l,
							moreLink: showMoreLink,
							lessLink: showLessLink,
						}),
						n.unobserve(o);
				}
			});
		},
		{ rootMargin: "0px 0px 100px 0px" }
	).observe(e);
};
$(".lazy-read-more").each(function (e, t) {
	lazyloadReadMore(t);
});
adasdashdkasjda = 1;
$(document).ready(function () {
	function e(e) {
		switch (
			(r.find(".tags-bar__tag").removeClass("active"),
			r.find(["[data-tab-name='", e, "']"].join("")).addClass("active"),
			o.find(".search-wrap__input-bar").val(""),
			(s = e),
			e)
		) {
			case "all":
				n();
				break;
			case "activities":
				i("Activity");
				break;
			case "tours":
				i("Tour");
				break;
			case "rentals":
				i("Rental");
				break;
			case "staycations":
				i("Stay");
		}
	}
	function t(e) {
		return new Bloodhound({
			datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
			queryTokenizer: Bloodhound.tokenizers.whitespace,
			remote: {
				url: "/listings/search",
				replace: function (t, n) {
					return "/listings/search?limit=10&tour_types[]=" + e + "&search=" + n;
				},
			},
		});
	}
	function n() {
		o.find(".search-wrap__input-bar").typeahead("destroy"),
			o.find(".search-wrap__input-bar").typeahead(
				{ highlight: !0 },
				{
					name: "destination_suggestions",
					displayKey: "name",
					source: a,
					limit: 20,
				},
				{
					name: "sub_categories",
					displayKey: "name",
					source: l,
					limit: 10,
					templates: { header: '<h3 class="search-title">Tags</h3>' },
				},
				{
					name: "tours",
					displayKey: "name",
					limit: 10,
					source: c,
					templates: { header: '<h3 class="search-title">Tours</h3>' },
				}
			);
	}
	function i(e) {
		o.find(".search-wrap__input-bar").typeahead("destroy"),
			o.find(".search-wrap__input-bar").typeahead(
				{ highlight: !0 },
				{
					name: "tour_type_search",
					displayKey: "name",
					source: t(e),
					limit: 10,
				}
			);
	}
	var o = $("#home-banner-search"),
		r = o.find(".search-wrap__tags-bar"),
		s = "all";
	r.find(".tags-bar__tag").click(function (t) {
		e(t.target.getAttribute("data-tab-name"));
	}),
		o.bind("typeahead:selected", function (e, t) {
			var n = $.parseJSON(JSON.stringify(t));
			window.location = n.redirect_url || n.url_path;
		});
	var a = new Bloodhound({
			datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
			queryTokenizer: Bloodhound.tokenizers.whitespace,
			remote: {
				url: "/destination_suggestions",
				replace: function (e, t) {
					return "/search/destination_suggestions?query=" + t;
				},
			},
		}),
		l = new Bloodhound({
			datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
			queryTokenizer: Bloodhound.tokenizers.whitespace,
			remote: {
				url: "/sub_categories",
				replace: function (e, t) {
					return "/search/sub_categories?query=" + t;
				},
			},
		}),
		c = new Bloodhound({
			datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
			queryTokenizer: Bloodhound.tokenizers.whitespace,
			remote: {
				url: "/tours",
				replace: function (e, t) {
					return "/search/tours?query=" + t;
				},
			},
		});
	e(s);
});
adasdashdkasjda = 1;
var dropdown = document.getElementsByClassName(
	"nearby-destinations__dropdown"
)[0];
$(".hp-show-more").click(function () {
	$(this).parent().find(".show-more-item").toggleClass("item-shown"),
		"Show More" == $(this).text()
			? $(this).text("Show Less")
			: ($(this).text("Show More"),
			  window.scrollTo({
					top: $(this).offset().top - 100,
					behavior: "smooth",
			  }));
}),
	$(".trigger-destinations-dropdown").click(function () {
		dropdown.classList.add("visible");
	}),
	$(window).click(function (e) {
		$(e.target).hasClass("nearby-destinations__dropdown") ||
			$(e.target).hasClass("trigger-destinations-dropdown");
		// dropdown.classList.remove("visible");
	}),
	$(function () {
		initSlick();
	});
var triggerDestinationGridBtns = document.querySelectorAll(
	".nearby-destinations__destinations-bar-item"
);
if (triggerDestinationGridBtns.length)
	for (let e of triggerDestinationGridBtns)
		e.addEventListener(
			"click",
			function (t) {
				var n = t.target.dataset.triggerGrid,
					i = document.getElementById(n),
					o = document.querySelectorAll(
						".nearby-destinations__destinations-grid"
					);
				for (let e of triggerDestinationGridBtns)
					e.classList.remove(
						"nearby-destinations__destinations-bar-item--selected"
					);
				e.classList.add("nearby-destinations__destinations-bar-item--selected"),
					console.log("selector is", i);
				for (let e of o)
					e.classList.remove("nearby-destinations__destinations-grid--visible");
				i.classList.add("nearby-destinations__destinations-grid--visible");
			},
			!1
		);
adasdashdkasjda = 1;

/////////////////////////////////////////////////////////////////////////////////////end of file//////////
var google_tag_params = {
	travel_destid: "REPLACE_WITH_VALUE",
	travel_originid: "REPLACE_WITH_VALUE",
	travel_startdate: "REPLACE_WITH_VALUE",
	travel_enddate: "REPLACE_WITH_VALUE",
	travel_pagetype: "REPLACE_WITH_VALUE",
	travel_totalvalue: "REPLACE_WITH_VALUE",
};

/* <![CDATA[ */
var google_conversion_id = 952271359;
var google_custom_params = google_tag_params;
var google_remarketing_only = true;
/* ]]> */

(function () {
	var h = this,
		l = function (a) {
			return "string" == typeof a;
		},
		aa =
			Date.now ||
			function () {
				return +new Date();
			};
	var m = function (a) {
		a = parseFloat(a);
		return isNaN(a) || 1 < a || 0 > a ? 0 : a;
	};
	var ba = m("0.20"),
		ca = m("1.0"),
		da = m("0.0"),
		ea = m("1.0");
	var fa = Array.prototype.indexOf
			? function (a, b, c) {
					return Array.prototype.indexOf.call(a, b, c);
			  }
			: function (a, b, c) {
					c = null == c ? 0 : 0 > c ? Math.max(0, a.length + c) : c;
					if (l(a)) return l(b) && 1 == b.length ? a.indexOf(b, c) : -1;
					for (; c < a.length; c++) if (c in a && a[c] === b) return c;
					return -1;
			  },
		ha = Array.prototype.filter
			? function (a, b, c) {
					return Array.prototype.filter.call(a, b, c);
			  }
			: function (a, b, c) {
					for (
						var d = a.length, e = [], f = 0, g = l(a) ? a.split("") : a, k = 0;
						k < d;
						k++
					)
						if (k in g) {
							var n = g[k];
							b.call(c, n, k, a) && (e[f++] = n);
						}
					return e;
			  },
		ia = Array.prototype.map
			? function (a, b, c) {
					return Array.prototype.map.call(a, b, c);
			  }
			: function (a, b, c) {
					for (
						var d = a.length, e = Array(d), f = l(a) ? a.split("") : a, g = 0;
						g < d;
						g++
					)
						g in f && (e[g] = b.call(c, f[g], g, a));
					return e;
			  },
		ja = function (a) {
			return Array.prototype.concat.apply([], arguments);
		};
	var p = function (a) {
		var b = [],
			c = 0,
			d;
		for (d in a) b[c++] = a[d];
		return b;
	};
	var r = function (a) {
		r[" "](a);
		return a;
	};
	r[" "] = function () {};
	var v = function (a, b) {
		for (var c in a)
			Object.prototype.hasOwnProperty.call(a, c) && b.call(void 0, a[c], c, a);
	};
	var ka = /^true$/.test("false");
	var w = null,
		ma = function () {
			var a = p(la);
			this.j = {};
			this.b = {};
			a = a || [];
			for (var b = 0, c = a.length; b < c; ++b) this.b[a[b]] = "";
		},
		y = function () {
			if (null === w) {
				w = "";
				try {
					var a = h.top.location.hash;
					if (a) {
						var b = a.match(/\bdeid=([\d,]+)/);
						w = b ? b[1] : "";
					}
				} catch (c) {}
			}
			return w;
		},
		A = function (a, b, c) {
			var d = z;
			if (c ? d.b.hasOwnProperty(c) && "" == d.b[c] : 1) {
				var e;
				e = (e = y())
					? (e = e.match(new RegExp("\\b(" + a.join("|") + ")\\b")))
						? e[0]
						: null
					: null;
				if (e) a = e;
				else
					a: {
						if (!(1e-4 > Math.random()) && ((e = Math.random()), e < b)) {
							try {
								var f = new Uint32Array(1);
								h.crypto.getRandomValues(f);
								e = f[0] / 65536 / 65536;
							} catch (g) {
								e = Math.random();
							}
							a = a[Math.floor(e * a.length)];
							break a;
						}
						a = null;
					}
				a &&
					"" != a &&
					(c ? d.b.hasOwnProperty(c) && (d.b[c] = a) : (d.j[a] = !0));
			}
		},
		B = function (a) {
			var b = z;
			return b.b.hasOwnProperty(a) ? b.b[a] : "";
		},
		na = function () {
			var a = z,
				b = [];
			v(a.j, function (a, d) {
				b.push(d);
			});
			v(a.b, function (a) {
				"" != a && b.push(a);
			});
			return b;
		};
	var la = {
			f: 2,
			g: 3,
			h: 4,
			i: 5,
		},
		C = {
			g: {
				c: "27391101",
				a: "27391102",
			},
			f: {
				c: "376635470",
				a: "376635471",
			},
			h: {
				c: "659234980",
				a: "659234981",
			},
			i: {
				a: "659235991",
			},
		},
		z = null,
		oa = function () {
			var a = ja.apply(
					[],
					ia(
						p(C),
						function (a) {
							return p(a);
						},
						void 0
					)
				),
				b = ha(y().split(","), function (b) {
					return "" != b && !(0 <= fa(a, b));
				});
			return 0 < b.length ? "&debug_experiment_id=" + b.join(",") : "";
		};
	var E = function (a, b, c) {
			for (; 0 <= (b = a.indexOf("fmt", b)) && b < c; ) {
				var d = a.charCodeAt(b - 1);
				if (38 == d || 63 == d)
					if (((d = a.charCodeAt(b + 3)), !d || 61 == d || 38 == d || 35 == d))
						return b;
				b += 4;
			}
			return -1;
		},
		F = /#|$/,
		pa = /[?&]($|#)/;
	var G = "google_conversion_id google_conversion_format google_conversion_type google_conversion_order_id google_conversion_language google_conversion_value google_conversion_evaluemrc google_conversion_currency google_conversion_domain google_conversion_label google_conversion_color google_disable_viewthrough google_enable_display_cookie_match google_read_ga_cookie_opt_in google_remarketing_only google_remarketing_for_search google_conversion_items google_conversion_merchant_id google_user_id google_custom_params google_conversion_date google_conversion_time google_conversion_js_version onload_callback opt_image_generator google_conversion_page_url google_conversion_referrer_url".split(
			" "
		),
		H = ["google_conversion_first_time", "google_conversion_snippets"],
		J = function (a) {
			return null != a ? encodeURIComponent(a.toString()) : "";
		},
		K = function (a) {
			if (null != a) {
				a = a.toString().substring(0, 512);
				var b = a.indexOf("#");
				return -1 == b ? a : a.substring(0, b);
			}
			return "";
		},
		L = function (a, b) {
			b = J(b);
			return "" != b && ((a = J(a)), "" != a) ? "&".concat(a, "=", b) : "";
		},
		M = function (a) {
			var b = typeof a;
			return null == a || "object" == b || "function" == b
				? null
				: String(a)
						.replace(/,/g, "\\,")
						.replace(/;/g, "\\;")
						.replace(/=/g, "\\=");
		},
		qa = function (a) {
			if (
				(a = a.google_custom_params) &&
				"object" == typeof a &&
				"function" != typeof a.join
			) {
				var b = [];
				for (g in a)
					if (Object.prototype.hasOwnProperty.call(a, g)) {
						var c = a[g];
						if (c && "function" == typeof c.join) {
							for (var d = [], e = 0; e < c.length; ++e) {
								var f = M(c[e]);
								null != f && d.push(f);
							}
							c = 0 == d.length ? null : d.join(",");
						} else c = M(c);
						(d = M(g)) && null != c && b.push(d + "=" + c);
					}
				var g = b.join(";");
			} else g = "";
			return "" == g ? "" : "&".concat("data=", encodeURIComponent(g));
		},
		ra = function (a) {
			if (null != a) {
				a = a.toString();
				if (2 == a.length) return L("hl", a);
				if (5 == a.length)
					return L("hl", a.substring(0, 2)) + L("gl", a.substring(3, 5));
			}
			return "";
		};

	function N(a) {
		return "number" != typeof a && "string" != typeof a ? "" : J(a.toString());
	}
	var sa = function (a) {
			if (!a) return "";
			a = a.google_conversion_items;
			if (!a) return "";
			for (var b = [], c = 0, d = a.length; c < d; c++) {
				var e = a[c],
					f = [];
				e &&
					(f.push(N(e.value)),
					f.push(N(e.quantity)),
					f.push(N(e.item_id)),
					f.push(N(e.adwords_grouping)),
					f.push(N(e.sku)),
					b.push("(" + f.join("*") + ")"));
			}
			return 0 < b.length ? "&item=" + b.join("") : "";
		},
		ta = function (a, b) {
			if (
				!b.google_remarketing_only &&
				!b.google_conversion_domain &&
				b.google_read_ga_cookie_opt_in
			) {
				b = "";
				if (z && B(5) == C.i.a) {
					var c;
					b = a.cookie;
					a = {};
					if (b) {
						b = b.split(";");
						for (
							var d = /^\s*_gac_(.*)=(\d+\.)(\d+\.)(.*?)\s*$/, e = 0;
							e < b.length;
							e++
						) {
							var f = b[e].match(d);
							f &&
								5 == f.length &&
								f[1] &&
								f[4] &&
								(a[f[1]] || (a[f[1]] = []), a[f[1]].push(f[4]));
						}
					}
					b = [];
					for (c in a) b.push(c + ":" + a[c].join(","));
					b = (c = 0 < b.length ? b.join(";") : "") ? L("gac", c) : "";
				}
				return b;
			}
			return "";
		},
		ua = function (a, b, c) {
			var d = [];
			if (a) {
				var e = a.screen;
				e &&
					(d.push(L("u_h", e.height)),
					d.push(L("u_w", e.width)),
					d.push(L("u_ah", e.availHeight)),
					d.push(L("u_aw", e.availWidth)),
					d.push(L("u_cd", e.colorDepth)));
				a.history && d.push(L("u_his", a.history.length));
			}
			c &&
				"function" == typeof c.getTimezoneOffset &&
				d.push(L("u_tz", -c.getTimezoneOffset()));
			b &&
				("function" == typeof b.javaEnabled &&
					d.push(L("u_java", b.javaEnabled())),
				b.plugins && d.push(L("u_nplug", b.plugins.length)),
				b.mimeTypes && d.push(L("u_nmime", b.mimeTypes.length)));
			return d.join("");
		};

	function va(a) {
		a = a ? a.title : "";
		if (void 0 == a || "" == a) return "";
		var b = function (a) {
			try {
				return decodeURIComponent(a), !0;
			} catch (e) {
				return !1;
			}
		};
		a = encodeURIComponent(a);
		for (var c = 256; !b(a.substr(0, c)); ) c--;
		return "&tiba=" + a.substr(0, c);
	}
	var O = function (a, b, c, d) {
			var e = "";
			if (b) {
				if (a.top == a) var f = 0;
				else {
					var g = a.location.ancestorOrigins;
					if (g) f = g[g.length - 1] == a.location.origin ? 1 : 2;
					else {
						g = a.top;
						try {
							var k;
							if ((k = !!g && null != g.location.href))
								c: {
									try {
										r(g.foo);
										k = !0;
										break c;
									} catch (n) {}
									k = !1;
								}
							f = k;
						} catch (n) {
							f = !1;
						}
						f = f ? 1 : 2;
					}
				}
				a = c ? c : 1 == f ? a.top.location.href : a.location.href;
				e += L("frm", f);
				e += L("url", K(a));
				e += L("ref", K(d || b.referrer));
			}
			return e;
		},
		P = function (a, b) {
			return !(ka || (b && wa.test(navigator.userAgent))) ||
				(a &&
					a.location &&
					a.location.protocol &&
					"https:" == a.location.protocol.toString().toLowerCase())
				? "https:"
				: "http:";
		},
		Q = function (a, b, c) {
			c = c.google_remarketing_only
				? "googleads.g.doubleclick.net"
				: c.google_conversion_domain || "www.googleadservices.com";
			return (
				P(a, /www[.]googleadservices[.]com/i.test(c)) +
				"//" +
				c +
				"/pagead/" +
				b
			);
		},
		xa = function (a, b, c, d) {
			var e = "/?";
			"landing" == d.google_conversion_type && (e = "/extclk?");
			e = [
				d.google_remarketing_only ? "viewthroughconversion/" : "conversion/",
				J(d.google_conversion_id),
				e,
				"random=",
				J(d.google_conversion_time),
			].join("");
			e = Q(a, e, d);
			a =
				[
					L("cv", d.google_conversion_js_version),
					L("fst", d.google_conversion_first_time),
					L("num", d.google_conversion_snippets),
					L("fmt", d.google_conversion_format),
					L("userId", d.google_user_id),
					L("value", d.google_conversion_value),
					L("evaluemrc", d.google_conversion_evaluemrc),
					L("currency_code", d.google_conversion_currency),
					L("label", d.google_conversion_label),
					L("oid", d.google_conversion_order_id),
					L("bg", d.google_conversion_color),
					ra(d.google_conversion_language),
					L("guid", "ON"),
					L("disvt", d.google_disable_viewthrough),
					L("eid", na().join()),
					sa(d),
					ua(a, b, d.google_conversion_date),
					qa(d),
					ta(c, d),
					O(
						a,
						c,
						d.google_conversion_page_url,
						d.google_conversion_referrer_url
					),
					d.google_remarketing_for_search && !d.google_conversion_domain
						? "&srr=n"
						: "",
					va(c),
				].join("") + oa();
			return e + a;
		},
		R = function (a, b, c, d, e, f) {
			return (
				'<iframe name="' +
				a +
				'" title="' +
				b +
				'" width="' +
				d +
				'" height="' +
				e +
				'" src="' +
				c +
				'" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true"' +
				(f ? ' style="display:none"' : "") +
				' scrolling="no"></iframe>'
			);
		},
		ya = function (a) {
			return {
				ar: 1,
				bg: 1,
				cs: 1,
				da: 1,
				de: 1,
				el: 1,
				en_AU: 1,
				en_US: 1,
				en_GB: 1,
				es: 1,
				et: 1,
				fi: 1,
				fr: 1,
				hi: 1,
				hr: 1,
				hu: 1,
				id: 1,
				is: 1,
				it: 1,
				iw: 1,
				ja: 1,
				ko: 1,
				lt: 1,
				nl: 1,
				no: 1,
				pl: 1,
				pt_BR: 1,
				pt_PT: 1,
				ro: 1,
				ru: 1,
				sk: 1,
				sl: 1,
				sr: 1,
				sv: 1,
				th: 1,
				tl: 1,
				tr: 1,
				vi: 1,
				zh_CN: 1,
				zh_TW: 1,
			}[a]
				? a + ".html"
				: "en_US.html";
		},
		wa = /Android ([01]\.|2\.[01])/i,
		za = function (a, b) {
			if (
				!b.google_remarketing_only ||
				!b.google_enable_display_cookie_match ||
				!z ||
				B(2) != C.f.a
			)
				return "";
			a = P(a, !1) + "//bid.g.doubleclick.net/xbbe/pixel?d=KAE";
			return R(
				"google_cookie_match_frame",
				"Google cookie match frame",
				a,
				1,
				1,
				!0
			);
		};

	function S(a, b) {
		return (
			'<img height="1" width="1" border="0" alt="" src="' +
			a.replace("gen204Type", b) +
			'" style="display:none" />'
		);
	}
	var Aa = function (a) {
			if (z && B(4) == C.h.a) {
				var b = Math.floor(1e9 * Math.random()),
					c =
						P(a, !1) +
						"//pagead2.googlesyndication.com/pagead/gen_204?id=beacon-api-web-survey&type=gen204Type";
				c += L("random", b);
				c += L("time", aa());
				if (a.navigator && a.navigator.sendBeacon) {
					try {
						var d = c.replace("gen204Type", "send-beacon");
						a.navigator.sendBeacon(d, "");
					} catch (e) {}
					return S(c, "img");
				}
				return S(c, "beacon-undefined");
			}
			return "";
		},
		T = function (a, b, c, d) {
			var e = "";
			d.google_remarketing_only &&
				d.google_enable_display_cookie_match &&
				(z && A([C.f.c, C.f.a], ba, 2), (e = za(a, d)));
			3 != d.google_conversion_format ||
				d.google_remarketing_only ||
				d.google_conversion_domain ||
				(z && A([C.g.c, C.g.a], ca, 3));
			d.google_remarketing_only ||
				d.google_conversion_domain ||
				(z && A([C.i.a], ea, 5));
			z && A([C.h.c, C.h.a], da, 4);
			b = xa(a, b, c, d);
			var f = function (a, b, c, d) {
				return (
					'<img height="' +
					c +
					'" width="' +
					b +
					'" border="0" alt="" src="' +
					a +
					'"' +
					(d ? ' style="display:none"' : "") +
					" />"
				);
			};
			return 0 == d.google_conversion_format &&
				null == d.google_conversion_domain
				? '<a href="' +
						(P(a, !1) +
							"//services.google.com/sitestats/" +
							ya(d.google_conversion_language) +
							"?cid=" +
							J(d.google_conversion_id)) +
						'" target="_blank">' +
						f(b, 135, 27, !1) +
						"</a>" +
						e
				: 1 < d.google_conversion_snippets || 3 == d.google_conversion_format
				? Ba(c, b)
					? e
					: f(b, 1, 1, !0) + e + Aa(a)
				: R(
						"google_conversion_frame",
						"Google conversion frame",
						b,
						2 == d.google_conversion_format ? 200 : 300,
						2 == d.google_conversion_format ? 26 : 13,
						!1
				  ) + e;
		};

	function Ca() {
		return new Image();
	}

	function Ba(a, b) {
		if (z && B(3) === C.g.a)
			try {
				var c = b.search(F),
					d = E(b, 0, c);
				if (0 > d) var e = null;
				else {
					var f = b.indexOf("&", d);
					if (0 > f || f > c) f = c;
					d += 4;
					e = decodeURIComponent(b.substr(d, f - d).replace(/\+/g, " "));
				}
				if (3 != e) var g = !1;
				else {
					var k = b.search(F);
					e = 0;
					var n;
					for (c = []; 0 <= (n = E(b, e, k)); )
						c.push(b.substring(e, n)),
							(e = Math.min(b.indexOf("&", n) + 1 || k, k));
					c.push(b.substr(e));
					var q = c.join("").replace(pa, "$1");
					var D = "fmt=" + encodeURIComponent("4");
					if (D) {
						var t = q.indexOf("#");
						0 > t && (t = q.length);
						var x = q.indexOf("?");
						if (0 > x || x > t) {
							x = t;
							var U = "";
						} else U = q.substring(x + 1, t);
						var u = [q.substr(0, x), U, q.substr(t)];
						var I = u[1];
						u[1] = D ? (I ? I + "&" + D : D) : I;
						var V = u[0] + (u[1] ? "?" + u[1] : "") + u[2];
					} else V = q;
					var W = a.createElement("script");
					W.src = V;
					a.getElementsByTagName("script")[0].parentElement.appendChild(W);
					g = !0;
				}
				return g;
			} catch (Ma) {}
		return !1;
	}
	var Da = function (a, b) {
			var c = a.opt_image_generator && a.opt_image_generator.call;
			b += L("async", "1");
			var d = Ca;
			c && (d = a.opt_image_generator);
			a = d();
			a.src = b;
			a.onload = function () {};
		},
		X = function (a, b, c) {
			var d = Math.floor(1e9 * Math.random());
			d = [J(c.google_conversion_id), "/?random=", d].join("");
			d = P(a, !1) + "//www.google.com/ads/user-lists/" + d;
			a = [
				L("label", c.google_conversion_label),
				L("fmt", "3"),
				O(a, b, c.google_conversion_page_url, c.google_conversion_referrer_url),
			].join("");
			Da(c, d + a);
		},
		Ea = function (a, b) {
			for (
				var c = document.createElement("iframe"), d = [], e = [], f = 0;
				f < b.google_conversion_items.length;
				f++
			) {
				var g = b.google_conversion_items[f];
				g && g.quantity && g.sku && (d.push(g.sku), e.push(g.quantity));
			}
			f = "";
			null != b.google_conversion_language &&
				((g = b.google_conversion_language.toString()),
				5 == g.length &&
					(f =
						"&language=" +
						g.substring(0, 2) +
						"&country=" +
						g.substring(3, 5)));
			a = P(a, !1) + "//www.google.com/ads/mrc";
			c.src =
				a +
				"?sku=" +
				d.join(",") +
				"&qty=" +
				e.join(",") +
				"&oid=" +
				b.google_conversion_order_id +
				"&mcid=" +
				b.google_conversion_merchant_id +
				f;
			c.style.width = "1px";
			c.style.height = "1px";
			c.style.display = "none";
			return c;
		},
		Fa = function (a) {
			if (
				"landing" == a.google_conversion_type ||
				!a.google_conversion_id ||
				(a.google_remarketing_only && a.google_disable_viewthrough)
			)
				return !1;
			a.google_conversion_date = new Date();
			a.google_conversion_time = a.google_conversion_date.getTime();
			a.google_conversion_snippets =
				"number" == typeof a.google_conversion_snippets &&
				0 < a.google_conversion_snippets
					? a.google_conversion_snippets + 1
					: 1;
			"number" != typeof a.google_conversion_first_time &&
				(a.google_conversion_first_time = a.google_conversion_time);
			a.google_conversion_js_version = "8";
			0 != a.google_conversion_format &&
				1 != a.google_conversion_format &&
				2 != a.google_conversion_format &&
				3 != a.google_conversion_format &&
				(a.google_conversion_format = 1);
			!1 !== a.google_enable_display_cookie_match &&
				(a.google_enable_display_cookie_match = !0);
			z = new ma();
			return !0;
		},
		Ga = function (a) {
			for (var b = 0; b < G.length; b++) a[G[b]] = null;
		},
		Ha = function (a) {
			for (var b = {}, c = 0; c < G.length; c++) b[G[c]] = a[G[c]];
			for (c = 0; c < H.length; c++) b[H[c]] = a[H[c]];
			return b;
		},
		Ia = function (a) {
			var b = document.getElementsByTagName("head")[0];
			b ||
				((b = document.createElement("head")),
				document
					.getElementsByTagName("html")[0]
					.insertBefore(b, document.getElementsByTagName("body")[0]));
			var c = document.createElement("script");
			c.src = Q(window, "conversion_debug_overlay.js", a);
			b.appendChild(c);
		};
	var Ja = function (a, b, c) {
		a.addEventListener
			? a.addEventListener(b, c, void 0)
			: a.attachEvent && a.attachEvent("on" + b, c);
	};
	var Y = function (a) {
			return (
				{
					visible: 1,
					hidden: 2,
					prerender: 3,
					preview: 4,
					unloaded: 5,
				}[
					a.webkitVisibilityState ||
						a.mozVisibilityState ||
						a.visibilityState ||
						""
				] || 0
			);
		},
		Ka = function (a) {
			var b;
			a.mozVisibilityState
				? (b = "mozvisibilitychange")
				: a.webkitVisibilityState
				? (b = "webkitvisibilitychange")
				: a.visibilityState && (b = "visibilitychange");
			return b;
		},
		Z = function (a, b) {
			if (3 == Y(b)) return !1;
			a();
			return !0;
		},
		La = function (a, b) {
			if (!Z(a, b)) {
				var c = !1,
					d = Ka(b),
					e = function () {
						if (!c && Z(a, b)) {
							c = !0;
							var f = e;
							b.removeEventListener
								? b.removeEventListener(d, f, void 0)
								: b.detachEvent && b.detachEvent("on" + d, f);
						}
					};
				d && Ja(b, d, e);
			}
		};
	// (function (a, b, c) {
	// 	if (a)
	// 		if (/[\?&;]google_debug/.exec(document.URL)) Ia(a);
	// 		else {
	// 			try {
	// 				if (Fa(a))
	// 					if (3 == Y(c)) {
	// 						var d = Ha(a),
	// 							e = "google_conversion_" + Math.floor(1e9 * Math.random());
	// 						c.write('<span id="' + e + '"></span>');
	// 						La(function () {
	// 							try {
	// 								var f = c.getElementById(e);
	// 								f &&
	// 									((f.innerHTML = T(a, b, c, d)),
	// 									d.google_remarketing_for_search &&
	// 										!d.google_conversion_domain &&
	// 										X(a, c, d));
	// 							} catch (g) {}
	// 						}, c);
	// 					} else
	// 						c.write(T(a, b, c, a)),
	// 							a.google_remarketing_for_search &&
	// 								!a.google_conversion_domain &&
	// 								X(a, c, a);
	// 				a.google_conversion_merchant_id &&
	// 					a.google_conversion_order_id &&
	// 					a.google_conversion_items &&
	// 					c.documentElement.appendChild(Ea(a, a));
	// 			} catch (f) {}
	// 			Ga(a);
	// 		}
	// })(window, navigator, document);
}.call(this));

// logo
// $(function () {
// 	$(window).scroll(function () {
// 		var scroll = $(window).scrollTop();

// 		if (scroll >= 100) {
// 			$(".logowhite").hide();
// 			$(".logoblack").show();

// 			//logo.removeClass('lrg-logo').addClass("sml-logo").fadeIn( "slow");
// 		}
// 		if (scroll <= 80) {
// 			$(".logowhite").show();

// 			$(".logoblack").hide();
// 		} else {
// 			$(".logoblack").show();
// 		}
// 	});
// });

// $(function () {
// 	$(window).scroll(function () {
// 		var scroll = $(window).scrollTop();

// 		if (scroll >= 50) {
// 			$(".mobwhitelogo").hide();
// 		}
// 		if (scroll <= 50) {
// 			$(".mobwhitelogo").show();

// 			$(".mobblacklogo").hide();
// 		} else {
// 			$(".mobblacklogo").show();
// 		}
// 	});
// });

// ////////////////////////////////////////
// !(function (n, t, e) {
// 	function r(e, i) {
// 		if (!t[e]) {
// 			if (!n[e]) {
// 				var a = "function" == typeof __nr_require && __nr_require;
// 				if (!i && a) return a(e, !0);
// 				if (o) return o(e, !0);
// 				throw new Error("Cannot find module '" + e + "'");
// 			}
// 			var s = (t[e] = { exports: {} });
// 			n[e][0].call(
// 				s.exports,
// 				function (t) {
// 					var o = n[e][1][t];
// 					return r(o || t);
// 				},
// 				s,
// 				s.exports
// 			);
// 		}
// 		return t[e].exports;
// 	}
// 	for (
// 		var o = "function" == typeof __nr_require && __nr_require, i = 0;
// 		i < e.length;
// 		i++
// 	)
// 		r(e[i]);
// 	return r;
// })(
// 	{
// 		1: [
// 			function (n, t, e) {
// 				t.exports = function (n, t) {
// 					return "addEventListener" in window
// 						? window.addEventListener(n, t, !1)
// 						: "attachEvent" in window
// 						? window.attachEvent("on" + n, t)
// 						: void 0;
// 				};
// 			},
// 			{},
// 		],
// 		2: [
// 			function (n, t, e) {
// 				function r(n, t, e, r, i) {
// 					var a = c(n, t, e, i);
// 					return (a.metrics = o(r, a.metrics)), a;
// 				}
// 				function o(n, t) {
// 					return (
// 						t || (t = { count: 0 }),
// 						(t.count += 1),
// 						m(n, function (n, e) {
// 							t[n] = i(e, t[n]);
// 						}),
// 						t
// 					);
// 				}
// 				function i(n, t) {
// 					return t
// 						? (t.c || (t = u(t.t)),
// 						  (t.c += 1),
// 						  (t.t += n),
// 						  (t.sos += n * n),
// 						  n > t.max && (t.max = n),
// 						  n < t.min && (t.min = n),
// 						  t)
// 						: { t: n };
// 				}
// 				function a(n, t, e, r, o) {
// 					var a = c(n, t, r, o);
// 					if (!a.metrics) return void (a.metrics = e);
// 					var u = a.metrics;
// 					(u.count += e.count),
// 						m(e, function (n, t) {
// 							if ("count" !== n) {
// 								var r = u[n],
// 									o = e[n];
// 								o && !o.c ? (u[n] = i(o.t, r)) : (u[n] = s(o, u[n]));
// 							}
// 						});
// 				}
// 				function s(n, t) {
// 					return t
// 						? (t.c || (t = u(t.t)),
// 						  (t.min = Math.min(n.min, t.min)),
// 						  (t.max = Math.max(n.max, t.max)),
// 						  (t.t += n.t),
// 						  (t.sos += n.sos),
// 						  (t.c += n.c),
// 						  t)
// 						: n;
// 				}
// 				function u(n) {
// 					return { t: n, min: n, max: n, sos: n * n, c: 1 };
// 				}
// 				function c(n, t, e, r) {
// 					h[n] || (h[n] = {});
// 					var o = h[n][t];
// 					return (
// 						o || ((o = h[n][t] = { params: e || {} }), r && (o.custom = r)), o
// 					);
// 				}
// 				function f(n, t) {
// 					return t ? h[n] && h[n][t] : h[n];
// 				}
// 				function l(n) {
// 					for (var t = {}, e = "", r = !1, o = 0; o < n.length; o++)
// 						(e = n[o]), (t[e] = d(h[e])), t[e].length && (r = !0), delete h[e];
// 					return r ? t : null;
// 				}
// 				function d(n) {
// 					return "object" != typeof n ? [] : m(n, p);
// 				}
// 				function p(n, t) {
// 					return t;
// 				}
// 				var m = n(38),
// 					h = {};
// 				t.exports = { store: r, take: l, get: f, merge: a };
// 			},
// 			{},
// 		],
// 		3: [
// 			function (n, t, e) {
// 				function r(n, t, e) {
// 					"string" == typeof t &&
// 						("/" !== t.charAt(0) && (t = "/" + t),
// 						(h.customTransaction = (e || "http://custom.transaction") + t));
// 				}
// 				function o(n, t) {
// 					var e = t ? t - h.offset : n;
// 					l.store("cm", "finished", { name: "finished" }, { time: e }),
// 						i(n, { name: "finished", start: e + h.offset, origin: "nr" }),
// 						v("api-addPageAction", [e, "finished"]);
// 				}
// 				function i(n, t) {
// 					if (t && "object" == typeof t && t.name && t.start) {
// 						var e = {
// 							n: t.name,
// 							s: t.start - h.offset,
// 							e: (t.end || t.start) - h.offset,
// 							o: t.origin || "",
// 							t: "api",
// 						};
// 						v("bstApi", [e]);
// 					}
// 				}
// 				function a(n, t, e, r, o, i, a) {
// 					if (((t = window.encodeURIComponent(t)), (g += 1), h.info.beacon)) {
// 						var s = "https://" + h.info.beacon + "/1/" + h.info.licenseKey;
// 						(s += "?a=" + h.info.applicationID + "&"),
// 							(s += "t=" + t + "&"),
// 							(s += "qt=" + ~~e + "&"),
// 							(s += "ap=" + ~~r + "&"),
// 							(s += "be=" + ~~o + "&"),
// 							(s += "dc=" + ~~i + "&"),
// 							(s += "fe=" + ~~a + "&"),
// 							(s += "c=" + g),
// 							p.img(s);
// 					}
// 				}
// 				function s(n, t) {
// 					h.onerror = t;
// 				}
// 				function u(n, t, e) {
// 					++x > 10 || (h.releaseIds[t.slice(-200)] = ("" + e).slice(-200));
// 				}
// 				var c = n(17),
// 					f = n(10),
// 					l = n(2),
// 					d = n(19),
// 					p = n(23),
// 					m = n(38),
// 					h = n("loader"),
// 					v = n("handle"),
// 					g = 0;
// 				f.on("jserrors", function () {
// 					return { qs: l.take(["cm"]) };
// 				});
// 				var y = {
// 					finished: d(o),
// 					setPageViewName: r,
// 					setErrorHandler: s,
// 					addToTrace: i,
// 					inlineHit: a,
// 					addRelease: u,
// 				};
// 				m(y, function (n, t) {
// 					c("api-" + n, t, "api");
// 				});
// 				var x = 0;
// 			},
// 			{},
// 		],
// 		4: [
// 			function (n, t, e) {
// 				function r(n, t, e) {
// 					return n || 0 === n || "" === n ? t(n) + (e ? "," : "") : "!";
// 				}
// 				function o(n, t) {
// 					return t
// 						? Math.floor(n).toString(36)
// 						: void 0 === n || 0 === n
// 						? ""
// 						: Math.floor(n).toString(36);
// 				}
// 				function i() {
// 					function n(n) {
// 						return "undefined" == typeof n || "" === n
// 							? ""
// 							: ((n = String(n)),
// 							  f.call(t, n) ? o(t[n], !0) : ((t[n] = e++), s(n)));
// 					}
// 					var t = Object.hasOwnProperty("create") ? Object.create(null) : {},
// 						e = 0;
// 					return n;
// 				}
// 				function a(n, t) {
// 					var e = [];
// 					return (
// 						u(n, function (n, r) {
// 							if (!(e.length >= l)) {
// 								var o,
// 									i = 5;
// 								switch (((n = t(n)), typeof r)) {
// 									case "object":
// 										r ? (o = t(c(r))) : (i = 9);
// 										break;
// 									case "number":
// 										(i = 6), (o = r % 1 ? r : r + ".");
// 										break;
// 									case "boolean":
// 										i = r ? 7 : 8;
// 										break;
// 									case "undefined":
// 										i = 9;
// 										break;
// 									default:
// 										o = t(r);
// 								}
// 								e.push([i, n + (o ? "," + o : "")]);
// 							}
// 						}),
// 						e
// 					);
// 				}
// 				function s(n) {
// 					return "'" + n.replace(d, "\\$1");
// 				}
// 				var u = n(38),
// 					c = n(22),
// 					f = Object.prototype.hasOwnProperty,
// 					l = 64;
// 				t.exports = {
// 					nullable: r,
// 					numeric: o,
// 					getAddStringContext: i,
// 					addCustomAttributes: a,
// 				};
// 				var d = /([,\\;])/g;
// 			},
// 			{},
// 		],
// 		5: [
// 			function (n, t, e) {
// 				var r = /([^?#]*)[^#]*(#[^?]*|$).*/,
// 					o = /([^?#]*)().*/;
// 				t.exports = function (n, t) {
// 					return n.replace(t ? r : o, "$1$2");
// 				};
// 			},
// 			{},
// 		],
// 		6: [
// 			function (n, t, e) {
// 				function r(n, t) {
// 					var e = n[1];
// 					i(t[e], function (t, e) {
// 						var r = n[0],
// 							o = e[0];
// 						if (o === r) {
// 							var i = e[1],
// 								a = n[3],
// 								s = n[2];
// 							i.apply(a, s);
// 						}
// 					});
// 				}
// 				var o = n("ee"),
// 					i = n(38),
// 					a = n(17).handlers;
// 				t.exports = function (n) {
// 					var t = o.backlog[n],
// 						e = a[n];
// 					if (e) {
// 						for (var s = 0; t && s < t.length; ++s) r(t[s], e);
// 						i(e, function (n, t) {
// 							i(t, function (t, e) {
// 								e[0].on(n, e[1]);
// 							});
// 						});
// 					}
// 					delete a[n], (o.backlog[n] = null);
// 				};
// 			},
// 			{},
// 		],
// 		7: [
// 			function (n, t, e) {
// 				function r(n) {
// 					return f[n];
// 				}
// 				function o(n) {
// 					return null === n || void 0 === n
// 						? "null"
// 						: encodeURIComponent(n).replace(d, r);
// 				}
// 				function i(n, t) {
// 					for (var e = 0, r = 0; r < n.length; r++)
// 						if (((e += n[r].length), e > t)) return n.slice(0, r).join("");
// 					return n.join("");
// 				}
// 				function a(n, t) {
// 					var e = 0,
// 						r = "";
// 					return (
// 						u(n, function (n, i) {
// 							var a,
// 								s,
// 								u = [];
// 							if ("string" == typeof i)
// 								(a = "&" + n + "=" + o(i)), (e += a.length), (r += a);
// 							else if (i.length) {
// 								for (
// 									e += 9, s = 0;
// 									s < i.length &&
// 									((a = o(c(i[s]))),
// 									(e += a.length),
// 									!("undefined" != typeof t && e >= t));
// 									s++
// 								)
// 									u.push(a);
// 								r += "&" + n + "=%5B" + u.join(",") + "%5D";
// 							}
// 						}),
// 						r
// 					);
// 				}
// 				function s(n, t) {
// 					return t && "string" == typeof t ? "&" + n + "=" + o(t) : "";
// 				}
// 				var u = n(38),
// 					c = n(22),
// 					f = {
// 						"%2C": ",",
// 						"%3A": ":",
// 						"%2F": "/",
// 						"%40": "@",
// 						"%24": "$",
// 						"%3B": ";",
// 					},
// 					l = u(f, function (n) {
// 						return n;
// 					}),
// 					d = new RegExp(l.join("|"), "g");
// 				t.exports = { obj: a, fromArray: i, qs: o, param: s };
// 			},
// 			{},
// 		],
// 		8: [
// 			function (n, t, e) {
// 				var r = n(38),
// 					o = n("ee"),
// 					i = n(6);
// 				t.exports = function (n) {
// 					n &&
// 						"object" == typeof n &&
// 						(r(n, function (n, t) {
// 							t && !a[n] && (o.emit("feat-" + n, []), (a[n] = !0));
// 						}),
// 						i("feature"));
// 				};
// 				var a = (t.exports.active = {});
// 			},
// 			{},
// 		],
// 		9: [
// 			function (n, t, e) {
// 				function r(n, t, e) {
// 					(this.loader = n),
// 						(this.endpoint = t),
// 						(this.opts = e || {}),
// 						(this.started = !1),
// 						(this.timeoutHandle = null);
// 				}
// 				var o = n(10),
// 					i = n(23);
// 				(t.exports = r),
// 					(r.prototype.startTimer = function (n, t) {
// 						(this.interval = n),
// 							(this.started = !0),
// 							this.scheduleHarvest(null != t ? t : this.interval);
// 					}),
// 					(r.prototype.stopTimer = function () {
// 						(this.started = !1),
// 							this.timeoutHandle && clearTimeout(this.timeoutHandle);
// 					}),
// 					(r.prototype.scheduleHarvest = function (n, t) {
// 						if (!this.timeoutHandle) {
// 							var e = this;
// 							null == n && (n = this.interval),
// 								(this.timeoutHandle = setTimeout(function () {
// 									(e.timeoutHandle = null), e.runHarvest(t);
// 								}, 1e3 * n));
// 						}
// 					}),
// 					(r.prototype.runHarvest = function (n) {
// 						function t(t) {
// 							e.onHarvestFinished(n, t);
// 						}
// 						var e = this;
// 						if (this.opts.getPayload) {
// 							var r = o.getSubmitMethod(this.endpoint);
// 							if (!r) return !1;
// 							var a = r.method === i.xhr,
// 								s = this.opts.getPayload({ retry: a });
// 							s && o.send(this.endpoint, this.loader, s, n, r, t);
// 						} else o.sendX(this.endpoint, this.loader, n, t);
// 						this.started && this.scheduleHarvest();
// 					}),
// 					(r.prototype.onHarvestFinished = function (n, t) {
// 						if (
// 							(this.opts.onFinished && this.opts.onFinished(t),
// 							t.sent && t.retry)
// 						) {
// 							var e = t.delay || this.opts.retryDelay;
// 							this.started && e
// 								? (clearTimeout(this.timeoutHandle),
// 								  (this.timeoutHandle = null),
// 								  this.scheduleHarvest(e, n))
// 								: !this.started && e && this.scheduleHarvest(e, n);
// 						}
// 					});
// 			},
// 			{},
// 		],
// 		10: [
// 			function (n, t, e) {
// 				function r(n) {
// 					if (n.info.beacon) {
// 						n.info.queueTime &&
// 							T.store("measures", "qt", { value: n.info.queueTime }),
// 							n.info.applicationTime &&
// 								T.store("measures", "ap", { value: n.info.applicationTime }),
// 							S.measure("be", "starttime", "firstbyte"),
// 							S.measure("fe", "firstbyte", "onload"),
// 							S.measure("dc", "firstbyte", "domContent");
// 						var t = T.get("measures"),
// 							e = y(t, function (n, t) {
// 								return "&" + n + "=" + t.params.value;
// 							}).join("");
// 						if (e) {
// 							var r = "1",
// 								o = [h(n)];
// 							if (
// 								(o.push(e),
// 								o.push(b.param("tt", n.info.ttGuid)),
// 								o.push(b.param("us", n.info.user)),
// 								o.push(b.param("ac", n.info.account)),
// 								o.push(b.param("pr", n.info.product)),
// 								o.push(
// 									b.param(
// 										"af",
// 										y(n.features, function (n) {
// 											return n;
// 										}).join(",")
// 									)
// 								),
// 								window.performance &&
// 									"undefined" != typeof window.performance.timing)
// 							) {
// 								var i = {
// 									timing: x.addPT(window.performance.timing, {}),
// 									navigation: x.addPN(window.performance.navigation, {}),
// 								};
// 								o.push(b.param("perf", w(i)));
// 							}
// 							if (window.performance && window.performance.getEntriesByType) {
// 								var a = window.performance.getEntriesByType("paint");
// 								a &&
// 									a.length > 0 &&
// 									a.forEach(function (n) {
// 										!n.startTime ||
// 											n.startTime <= 0 ||
// 											("first-paint" === n.name
// 												? o.push(b.param("fp", String(Math.floor(n.startTime))))
// 												: "first-contentful-paint" === n.name &&
// 												  o.push(
// 														b.param("fcp", String(Math.floor(n.startTime)))
// 												  ),
// 											U(n.name, Math.floor(n.startTime)));
// 									});
// 							}
// 							o.push(b.param("xx", n.info.extra)),
// 								o.push(b.param("ua", n.info.userAttributes)),
// 								o.push(b.param("at", n.info.atts));
// 							var s = w(n.info.jsAttributes);
// 							o.push(b.param("ja", "{}" === s ? null : s));
// 							var u = b.fromArray(o, n.maxBytes);
// 							k.jsonp(
// 								"https://" +
// 									n.info.beacon +
// 									"/" +
// 									r +
// 									"/" +
// 									n.info.licenseKey +
// 									u,
// 								N
// 							);
// 						}
// 					}
// 				}
// 				function o(n) {
// 					var t = y(q, function (t) {
// 						return s(t, n, { unload: !0 });
// 					});
// 					return j(t, i);
// 				}
// 				function i(n, t) {
// 					return n || t;
// 				}
// 				function a(n, t) {
// 					for (
// 						var e = v(), r = v(), o = (q[n] && q[n]) || [], i = 0;
// 						i < o.length;
// 						i++
// 					) {
// 						var a = o[i](t);
// 						a && (a.body && y(a.body, e), a.qs && y(a.qs, r));
// 					}
// 					return { body: e(), qs: r() };
// 				}
// 				function s(n, t, e, r) {
// 					var o = f(n, e);
// 					if (!o) return !1;
// 					var i = { retry: o.method === k.xhr };
// 					return c(n, t, a(n, i), e, o, r);
// 				}
// 				function u(n, t, e, r, o, i) {
// 					var a = v(),
// 						s = v();
// 					e.body && y(e.body, a), e.qs && y(e.qs, s);
// 					var u = { body: a(), qs: s() };
// 					return c(n, t, u, r, o, i);
// 				}
// 				function c(n, t, e, r, o, i) {
// 					if (!t.info.errorBeacon) return !1;
// 					if (!(e.body || ("jserrors" === n && e.qs && e.qs.cm)))
// 						return i && i({ sent: !1 }), !1;
// 					r || (r = {});
// 					var a =
// 						"https://" +
// 						t.info.errorBeacon +
// 						"/" +
// 						n +
// 						"/1/" +
// 						t.info.licenseKey +
// 						h(t);
// 					e.qs && (a += b.obj(e.qs, t.maxBytes)), o || (o = f(n, r));
// 					var s,
// 						u = o.method,
// 						c = o.useBody,
// 						l = a;
// 					c && "events" === n
// 						? (s = e.body.e)
// 						: c
// 						? (s = w(e.body))
// 						: (l = a + b.obj(e.body, t.maxBytes));
// 					var d = u(l, s);
// 					if (i && u === k.xhr) {
// 						var p = d;
// 						p.addEventListener(
// 							"load",
// 							function () {
// 								var n = { sent: !0 };
// 								429 === this.status
// 									? ((n.retry = !0), (n.delay = R))
// 									: (408 !== this.status &&
// 											500 !== this.status &&
// 											503 !== this.status) ||
// 									  (n.retry = !0),
// 									r.needResponse && (n.responseText = this.responseText),
// 									i(n);
// 							},
// 							!1
// 						);
// 					}
// 					return (
// 						d ||
// 							u !== k.beacon ||
// 							((u = k.img), (d = u(a + b.obj(e.body, t.maxBytes)))),
// 						d
// 					);
// 				}
// 				function f(n, t) {
// 					t = t || {};
// 					var e, r;
// 					if (t.needResponse) {
// 						if (!I) return !1;
// 						(r = !0), (e = k.xhr);
// 					} else if (t.unload) (r = C), (e = C ? k.beacon : k.img);
// 					else if (I) (r = !0), (e = k.xhr);
// 					else {
// 						if ("events" !== n && "jserrors" !== n) return !1;
// 						e = k.img;
// 					}
// 					return { method: e, useBody: r };
// 				}
// 				function l(n) {
// 					if (n && n.info && n.info.errorBeacon && n.ieVersion) {
// 						var t =
// 							"https://" +
// 							n.info.errorBeacon +
// 							"/jserrors/ping/" +
// 							n.info.licenseKey +
// 							h(n);
// 						k.img(t);
// 					}
// 				}
// 				function d(n) {
// 					return n.info.transactionName
// 						? b.param("to", n.info.transactionName)
// 						: b.param("t", n.info.tNamePlain || "Unnamed Transaction");
// 				}
// 				function p(n, t) {
// 					var e = q[n] || (q[n] = []);
// 					e.push(t);
// 				}
// 				function m() {
// 					y(q, function (n) {
// 						q[n] = [];
// 					});
// 				}
// 				function h(n) {
// 					var t = !0;
// 					return (
// 						"init" in NREUM &&
// 							"privacy" in NREUM.init &&
// 							(t = NREUM.init.privacy.cookies_enabled),
// 						[
// 							"?a=" + n.info.applicationID,
// 							b.param("sa", n.info.sa ? "" + n.info.sa : ""),
// 							b.param("v", M),
// 							d(n),
// 							b.param("ct", n.customTransaction),
// 							"&rst=" + n.now(),
// 							"&ck=" + (t ? "1" : "0"),
// 							b.param("ref", H(E.getLocation())),
// 						].join("")
// 					);
// 				}
// 				function v() {
// 					var n = {},
// 						t = !1;
// 					return function (e, r) {
// 						if ((r && r.length && ((n[e] = r), (t = !0)), t)) return n;
// 					};
// 				}
// 				var g = n(19),
// 					y = n(38),
// 					x = n(15),
// 					b = n(7),
// 					w = n(22),
// 					k = n(23),
// 					j = n(41),
// 					T = n(2),
// 					S = n(21),
// 					E = n(13),
// 					A = n(35),
// 					H = n(5),
// 					M = "1208.49599aa",
// 					N = "NREUM.setToken",
// 					q = {},
// 					C = !!navigator.sendBeacon,
// 					R = A.getConfiguration("harvest.tooManyRequestsDelay") || 60,
// 					_ = n(11),
// 					I = _ > 9 || 0 === _,
// 					U = n(16).addMetric;
// 				t.exports = {
// 					sendRUM: g(r),
// 					sendFinal: o,
// 					pingErrors: l,
// 					sendX: s,
// 					send: u,
// 					on: p,
// 					xhrUsable: I,
// 					resetListeners: m,
// 					getSubmitMethod: f,
// 				};
// 			},
// 			{},
// 		],
// 		11: [
// 			function (n, t, e) {
// 				var r = document.createElement("div");
// 				r.innerHTML =
// 					"<!--[if lte IE 6]><div></div><![endif]--><!--[if lte IE 7]><div></div><![endif]--><!--[if lte IE 8]><div></div><![endif]--><!--[if lte IE 9]><div></div><![endif]-->";
// 				var o,
// 					i = r.getElementsByTagName("div").length;
// 				(o = 4 === i ? 6 : 3 === i ? 7 : 2 === i ? 8 : 1 === i ? 9 : 0),
// 					(t.exports = o);
// 			},
// 			{},
// 		],
// 		12: [
// 			function (n, t, e) {
// 				function r(n) {
// 					a.sendFinal(c, !1), l.conditionallySet();
// 				}
// 				var o = n(21),
// 					i = n(25),
// 					a = n(10),
// 					s = n(17),
// 					u = n(8),
// 					c = n("loader"),
// 					f = n(6),
// 					l = n(14),
// 					d = n(35);
// 				n(3), n(24).init(c, d.getConfiguration("page_view_timing"));
// 				var p =
// 					"undefined" == typeof window.NREUM.autorun || window.NREUM.autorun;
// 				(window.NREUM.setToken = u),
// 					6 === n(11) ? (c.maxBytes = 2e3) : (c.maxBytes = 3e4),
// 					(c.releaseIds = {}),
// 					i(r),
// 					s("mark", o.mark, "api"),
// 					o.mark("done"),
// 					f("api"),
// 					p && a.sendRUM(c);
// 			},
// 			{},
// 		],
// 		13: [
// 			function (n, t, e) {
// 				function r() {
// 					return "" + location;
// 				}
// 				t.exports = { getLocation: r };
// 			},
// 			{},
// 		],
// 		14: [
// 			function (n, t, e) {
// 				function r() {
// 					var n = !0;
// 					"init" in NREUM &&
// 						"privacy" in NREUM.init &&
// 						(n = NREUM.init.privacy.cookies_enabled),
// 						a.navCookie && n && s.setCookie();
// 				}
// 				function o() {
// 					document.cookie =
// 						"NREUM=s=" +
// 						Number(new Date()) +
// 						"&r=" +
// 						i(document.location.href) +
// 						"&p=" +
// 						i(document.referrer) +
// 						"; path=/";
// 				}
// 				var i = n(18),
// 					a = n(20),
// 					s = { conditionallySet: r, setCookie: o };
// 				t.exports = s;
// 			},
// 			{},
// 		],
// 		15: [
// 			function (n, t, e) {
// 				function r(n, t) {
// 					var e = n["navigation" + a];
// 					return (
// 						(t.of = e),
// 						i(e, e, t, "n"),
// 						i(n[u + a], e, t, "u"),
// 						i(n[c + a], e, t, "r"),
// 						i(n[u + s], e, t, "ue"),
// 						i(n[c + s], e, t, "re"),
// 						i(n["fetch" + a], e, t, "f"),
// 						i(n[f + a], e, t, "dn"),
// 						i(n[f + s], e, t, "dne"),
// 						i(n["c" + l + a], e, t, "c"),
// 						i(n["secureC" + l + "ion" + a], e, t, "s"),
// 						i(n["c" + l + s], e, t, "ce"),
// 						i(n[d + a], e, t, "rq"),
// 						i(n[p + a], e, t, "rp"),
// 						i(n[p + s], e, t, "rpe"),
// 						i(n.domLoading, e, t, "dl"),
// 						i(n.domInteractive, e, t, "di"),
// 						i(n[h + a], e, t, "ds"),
// 						i(n[h + s], e, t, "de"),
// 						i(n.domComplete, e, t, "dc"),
// 						i(n[m + a], e, t, "l"),
// 						i(n[m + s], e, t, "le"),
// 						t
// 					);
// 				}
// 				function o(n, t) {
// 					return i(n.type, 0, t, "ty"), i(n.redirectCount, 0, t, "rc"), t;
// 				}
// 				function i(n, t, e, r) {
// 					var o;
// 					"number" == typeof n &&
// 						n > 0 &&
// 						((o = Math.round(n - t)), (e[r] = o)),
// 						v.push(o);
// 				}
// 				var a = "Start",
// 					s = "End",
// 					u = "unloadEvent",
// 					c = "redirect",
// 					f = "domainLookup",
// 					l = "onnect",
// 					d = "request",
// 					p = "response",
// 					m = "loadEvent",
// 					h = "domContentLoadedEvent",
// 					v = [];
// 				t.exports = { addPT: r, addPN: o, nt: v };
// 			},
// 			{},
// 		],
// 		16: [
// 			function (n, t, e) {
// 				function r(n, t) {
// 					o[n] = t;
// 				}
// 				var o = {};
// 				t.exports = { addMetric: r, metrics: o };
// 			},
// 			{},
// 		],
// 		17: [
// 			function (n, t, e) {
// 				function r(n, t, e, r) {
// 					o(r || i, n, t, e);
// 				}
// 				function o(n, t, e, r) {
// 					r || (r = "feature"), n || (n = i);
// 					var o = (a[r] = a[r] || {}),
// 						s = (o[t] = o[t] || []);
// 					s.push([n, e]);
// 				}
// 				var i = n("handle").ee;
// 				(t.exports = r), (r.on = o);
// 				var a = (r.handlers = {});
// 			},
// 			{},
// 		],
// 		18: [
// 			function (n, t, e) {
// 				function r(n) {
// 					var t,
// 						e = 0;
// 					for (t = 0; t < n.length; t++) e += (t + 1) * n.charCodeAt(t);
// 					return Math.abs(e);
// 				}
// 				t.exports = r;
// 			},
// 			{},
// 		],
// 		19: [
// 			function (n, t, e) {
// 				function r(n) {
// 					var t,
// 						e = !1;
// 					return function () {
// 						return e ? t : ((e = !0), (t = n.apply(this, o(arguments))));
// 					};
// 				}
// 				var o = n(39);
// 				t.exports = r;
// 			},
// 			{},
// 		],
// 		20: [
// 			function (n, t, e) {
// 				function r() {
// 					var n = o() || i();
// 					n && (s.mark("starttime", n), (u.offset = n));
// 				}
// 				function o() {
// 					if (!(c && c < 9)) {
// 						var e = n(40);
// 						return e.exists
// 							? ((t.exports.navCookie = !1),
// 							  window.performance.timing.navigationStart)
// 							: void 0;
// 					}
// 				}
// 				function i() {
// 					for (var n = document.cookie.split(" "), t = 0; t < n.length; t++)
// 						if (0 === n[t].indexOf("NREUM=")) {
// 							for (
// 								var e,
// 									r,
// 									o,
// 									i,
// 									s = n[t].substring("NREUM=".length).split("&"),
// 									u = 0;
// 								u < s.length;
// 								u++
// 							)
// 								0 === s[u].indexOf("s=")
// 									? (o = s[u].substring(2))
// 									: 0 === s[u].indexOf("p=")
// 									? ((r = s[u].substring(2)),
// 									  ";" === r.charAt(r.length - 1) &&
// 											(r = r.substr(0, r.length - 1)))
// 									: 0 === s[u].indexOf("r=") &&
// 									  ((e = s[u].substring(2)),
// 									  ";" === e.charAt(e.length - 1) &&
// 											(e = e.substr(0, e.length - 1)));
// 							if (e) {
// 								var c = a(document.referrer);
// 								(i = c == e),
// 									i || (i = a(document.location.href) == e && c == r);
// 							}
// 							if (i && o) {
// 								var f = new Date().getTime();
// 								if (f - o > 6e4) return;
// 								return o;
// 							}
// 						}
// 				}
// 				var a = n(18),
// 					s = n(21),
// 					u = n("loader"),
// 					c = n(36);
// 				(t.exports = { navCookie: !0 }), r();
// 			},
// 			{},
// 		],
// 		21: [
// 			function (n, t, e) {
// 				function r(n, t) {
// 					"undefined" == typeof t && (t = a() + a.offset), (s[n] = t);
// 				}
// 				function o(n, t, e) {
// 					var r = s[t],
// 						o = s[e];
// 					"undefined" != typeof r &&
// 						"undefined" != typeof o &&
// 						i.store("measures", n, { value: o - r });
// 				}
// 				var i = n(2),
// 					a = n(37),
// 					s = {};
// 				t.exports = { mark: r, measure: o };
// 			},
// 			{},
// 		],
// 		22: [
// 			function (n, t, e) {
// 				function r(n) {
// 					try {
// 						return i("", { "": n });
// 					} catch (t) {
// 						try {
// 							s.emit("internal-error", [t]);
// 						} catch (e) {}
// 					}
// 				}
// 				function o(n) {
// 					return (
// 						(u.lastIndex = 0),
// 						u.test(n)
// 							? '"' +
// 							  n.replace(u, function (n) {
// 									var t = c[n];
// 									return "string" == typeof t
// 										? t
// 										: "\\u" + ("0000" + n.charCodeAt(0).toString(16)).slice(-4);
// 							  }) +
// 							  '"'
// 							: '"' + n + '"'
// 					);
// 				}
// 				function i(n, t) {
// 					var e = t[n];
// 					switch (typeof e) {
// 						case "string":
// 							return o(e);
// 						case "number":
// 							return isFinite(e) ? String(e) : "null";
// 						case "boolean":
// 							return String(e);
// 						case "object":
// 							if (!e) return "null";
// 							var r = [];
// 							if (
// 								e instanceof window.Array ||
// 								"[object Array]" === Object.prototype.toString.apply(e)
// 							) {
// 								for (var s = e.length, u = 0; u < s; u += 1)
// 									r[u] = i(u, e) || "null";
// 								return 0 === r.length ? "[]" : "[" + r.join(",") + "]";
// 							}
// 							return (
// 								a(e, function (n) {
// 									var t = i(n, e);
// 									t && r.push(o(n) + ":" + t);
// 								}),
// 								0 === r.length ? "{}" : "{" + r.join(",") + "}"
// 							);
// 					}
// 				}
// 				var a = n(38),
// 					s = n("ee"),
// 					u = /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
// 					c = {
// 						"\b": "\\b",
// 						"\t": "\\t",
// 						"\n": "\\n",
// 						"\f": "\\f",
// 						"\r": "\\r",
// 						'"': '\\"',
// 						"\\": "\\\\",
// 					};
// 				t.exports = r;
// 			},
// 			{},
// 		],
// 		23: [
// 			function (n, t, e) {
// 				var r = (t.exports = {});
// 				(r.jsonp = function o(n, o) {
// 					var t = document.createElement("script");
// 					(t.type = "text/javascript"), (t.src = n + "&jsonp=" + o);
// 					var e = document.getElementsByTagName("script")[0];
// 					return e.parentNode.insertBefore(t, e), t;
// 				}),
// 					(r.xhr = function (n, t, e) {
// 						var r = new XMLHttpRequest();
// 						r.open("POST", n, !e);
// 						try {
// 							"withCredentials" in r && (r.withCredentials = !0);
// 						} catch (o) {}
// 						return (
// 							r.setRequestHeader("content-type", "text/plain"), r.send(t), r
// 						);
// 					}),
// 					(r.xhrSync = function (n, t) {
// 						return r.xhr(n, t, !0);
// 					}),
// 					(r.img = function (n) {
// 						var t = new Image();
// 						return (t.src = n), t;
// 					}),
// 					(r.beacon = function (n, t) {
// 						return navigator.sendBeacon(n, t);
// 					});
// 			},
// 			{},
// 		],
// 		24: [
// 			function (n, t, e) {
// 				function r(n, t) {
// 					if (v(t)) {
// 						(j = n), t || (t = {});
// 						var e = t.maxLCPTimeSeconds || 60,
// 							r = t.initialHarvestSeconds || 10;
// 						_ = t.harvestTimeSeconds || 30;
// 						var u = new S(j, "events", { onFinished: l, getPayload: m });
// 						E("timing", f),
// 							E("lcp", i),
// 							E("cls", a),
// 							E("pageHide", s),
// 							A(d),
// 							setTimeout(function () {
// 								o(), (N = !0);
// 							}, 1e3 * e),
// 							u.startTimer(_, r);
// 					}
// 				}
// 				function o() {
// 					if (!N && null !== q) {
// 						var n = q[0],
// 							t = q[1],
// 							e = { size: n.size, eid: n.id };
// 						t && (e.cls = t),
// 							c("lcp", Math.floor(n.startTime), e, !1),
// 							(N = !0);
// 					}
// 				}
// 				function i(n) {
// 					if (q) {
// 						var t = q[0];
// 						if (t.size >= n.size) return;
// 					}
// 					q = [n, C];
// 				}
// 				function a(n) {
// 					null === C && (C = 0), (C += n.value);
// 				}
// 				function s(n, t) {
// 					R || "hidden" !== t || (c("pageHide", n, null, !0), (R = !0));
// 				}
// 				function u() {
// 					c("unload", w(), null, !0);
// 				}
// 				function c(n, t, e, r) {
// 					(e = e || {}),
// 						r && null !== C && (e.cls = C),
// 						H.push({ name: n, value: t, attrs: e });
// 				}
// 				function f(n, t, e) {
// 					"fi" === n && setTimeout(o, 0), c(n, t, e, !0);
// 				}
// 				function l(n) {
// 					if (n.retry && M.length > 0) {
// 						for (var t = 0; t < M.length; t++) H.push(M[t]);
// 						M = [];
// 					}
// 				}
// 				function d() {
// 					o(), u();
// 					var n = m({ retry: !1 });
// 					T.send("events", j, n, { unload: !0 });
// 				}
// 				function p(n) {
// 					var t = n.attrs || {},
// 						e = j.info.jsAttributes || {};
// 					k(e, function (n, e) {
// 						"size" !== n &&
// 							"eid" !== n &&
// 							"cls" !== n &&
// 							"type" !== n &&
// 							"fid" !== n &&
// 							(t[n] = e);
// 					});
// 				}
// 				function m(n) {
// 					if (0 !== H.length) {
// 						var t = h(H);
// 						if (n.retry) for (var e = 0; e < H.length; e++) M.push(H[e]);
// 						return (H = []), { body: { e: t } };
// 					}
// 				}
// 				function h(n) {
// 					for (var t = x(), e = "bel.6;", r = 0; r < n.length; r++) {
// 						var o = n[r];
// 						(e += "e,"),
// 							(e += t(o.name) + ","),
// 							(e += g(o.value, y, !1) + ","),
// 							p(o);
// 						var i = b(o.attrs, t);
// 						i && i.length > 0 && (e += y(i.length) + ";" + i.join(";")),
// 							r + 1 < n.length && (e += ";");
// 					}
// 					return e;
// 				}
// 				function v(n) {
// 					return !n || n.enabled !== !1;
// 				}
// 				var g = n(4).nullable,
// 					y = n(4).numeric,
// 					x = n(4).getAddStringContext,
// 					b = n(4).addCustomAttributes,
// 					w = n(37),
// 					k = n(38),
// 					j = null,
// 					T = n(10),
// 					S = n(9),
// 					E = n(17),
// 					A = n(25),
// 					H = [],
// 					M = [],
// 					N = !1,
// 					q = null,
// 					C = null,
// 					R = !1;
// 				t.exports = { getPayload: h, timings: H, init: r, finalHarvest: d };
// 				var _ = 30;
// 			},
// 			{},
// 		],
// 		25: [
// 			function (n, t, e) {
// 				function r(n) {
// 					var t = i(n);
// 					!o || navigator.sendBeacon ? a("pagehide", t) : a("beforeunload", t),
// 						a("unload", t);
// 				}
// 				var o = n(36),
// 					i = n(19),
// 					a = n(1);
// 				t.exports = r;
// 			},
// 			{},
// 		],
// 		26: [
// 			function (n, t, e) {
// 				function r(n) {
// 					if (n) {
// 						var t = n.match(o);
// 						return t ? t[1] : void 0;
// 					}
// 				}
// 				var o = /([a-z0-9]+)$/i;
// 				t.exports = r;
// 			},
// 			{},
// 		],
// 		27: [
// 			function (n, t, e) {
// 				function r(n) {
// 					var t = null;
// 					try {
// 						if ((t = l(n))) return t;
// 					} catch (e) {
// 						if (v) throw e;
// 					}
// 					try {
// 						if ((t = o(n))) return t;
// 					} catch (e) {
// 						if (v) throw e;
// 					}
// 					try {
// 						if ((t = d(n))) return t;
// 					} catch (e) {
// 						if (v) throw e;
// 					}
// 					try {
// 						if ((t = s(n))) return t;
// 					} catch (e) {
// 						if (v) throw e;
// 					}
// 					try {
// 						if ((t = u(n))) return t;
// 					} catch (e) {
// 						if (v) throw e;
// 					}
// 					return { mode: "failed", stackString: "", frames: [] };
// 				}
// 				function o(n) {
// 					if (!n.stack) return null;
// 					var t = p(n.stack.split("\n"), i, {
// 						frames: [],
// 						stackLines: [],
// 						wrapperSeen: !1,
// 					});
// 					return t.frames.length
// 						? {
// 								mode: "stack",
// 								name: n.name || c(n),
// 								message: n.message,
// 								stackString: m(t.stackLines),
// 								frames: t.frames,
// 						  }
// 						: null;
// 				}
// 				function i(n, t) {
// 					var e = a(t);
// 					return e
// 						? (f(e.func) ? (n.wrapperSeen = !0) : n.stackLines.push(t),
// 						  n.wrapperSeen || n.frames.push(e),
// 						  n)
// 						: (n.stackLines.push(t), n);
// 				}
// 				function a(n) {
// 					var t = n.match(x);
// 					return (
// 						t || (t = n.match(y)),
// 						t
// 							? {
// 									url: t[2],
// 									func:
// 										("Anonymous function" !== t[1] &&
// 											"global code" !== t[1] &&
// 											t[1]) ||
// 										null,
// 									line: +t[3],
// 									column: t[4] ? +t[4] : null,
// 							  }
// 							: n.match(b) || n.match(w) || "anonymous" === n
// 							? { func: "evaluated code" }
// 							: void 0
// 					);
// 				}
// 				function s(n) {
// 					if (!("line" in n)) return null;
// 					var t = n.name || c(n);
// 					if (!n.sourceURL)
// 						return {
// 							mode: "sourceline",
// 							name: t,
// 							message: n.message,
// 							stackString: c(n) + ": " + n.message + "\n    in evaluated code",
// 							frames: [{ func: "evaluated code" }],
// 						};
// 					var e = t + ": " + n.message + "\n    at " + n.sourceURL;
// 					return (
// 						n.line && ((e += ":" + n.line), n.column && (e += ":" + n.column)),
// 						{
// 							mode: "sourceline",
// 							name: t,
// 							message: n.message,
// 							stackString: e,
// 							frames: [{ url: n.sourceURL, line: n.line, column: n.column }],
// 						}
// 					);
// 				}
// 				function u(n) {
// 					var t = n.name || c(n);
// 					return t
// 						? {
// 								mode: "nameonly",
// 								name: t,
// 								message: n.message,
// 								stackString: t + ": " + n.message,
// 								frames: [],
// 						  }
// 						: null;
// 				}
// 				function c(n) {
// 					var t = g.exec(String(n.constructor));
// 					return t && t.length > 1 ? t[1] : "unknown";
// 				}
// 				function f(n) {
// 					return n && n.indexOf("nrWrapper") >= 0;
// 				}
// 				function l(n) {
// 					if (!n.stacktrace) return null;
// 					for (
// 						var t,
// 							e = n.stacktrace,
// 							r = / line (\d+), column (\d+) in (?:<anonymous function: ([^>]+)>|([^\)]+))\(.*\) in (.*):\s*$/i,
// 							o = e.split("\n"),
// 							i = [],
// 							a = [],
// 							s = !1,
// 							u = 0,
// 							l = o.length;
// 						u < l;
// 						u += 2
// 					)
// 						if ((t = r.exec(o[u]))) {
// 							var d = {
// 								line: +t[1],
// 								column: +t[2],
// 								func: t[3] || t[4],
// 								url: t[5],
// 							};
// 							f(d.func) ? (s = !0) : a.push(o[u]), s || i.push(d);
// 						} else a.push(o[u]);
// 					return i.length
// 						? {
// 								mode: "stacktrace",
// 								name: n.name || c(n),
// 								message: n.message,
// 								stackString: m(a),
// 								frames: i,
// 						  }
// 						: null;
// 				}
// 				function d(n) {
// 					var t = n.message.split("\n");
// 					if (t.length < 4) return null;
// 					var e,
// 						r,
// 						o,
// 						i = /^\s*Line (\d+) of linked script ((?:file|http|https)\S+)(?:: in function (\S+))?\s*$/i,
// 						a = /^\s*Line (\d+) of inline#(\d+) script in ((?:file|http|https)\S+)(?:: in function (\S+))?\s*$/i,
// 						s = /^\s*Line (\d+) of function script\s*$/i,
// 						u = [],
// 						l = [],
// 						d = document.getElementsByTagName("script"),
// 						p = [],
// 						v = !1;
// 					for (r in d) h.call(d, r) && !d[r].src && p.push(d[r]);
// 					for (r = 2, o = t.length; r < o; r += 2) {
// 						var g = null;
// 						if ((e = i.exec(t[r]))) g = { url: e[2], func: e[3], line: +e[1] };
// 						else if ((e = a.exec(t[r]))) g = { url: e[3], func: e[4] };
// 						else if ((e = s.exec(t[r]))) {
// 							var y = window.location.href.replace(/#.*$/, ""),
// 								x = e[1];
// 							g = { url: y, line: x, func: "" };
// 						}
// 						g && (f(g.func) ? (v = !0) : l.push(t[r]), v || u.push(g));
// 					}
// 					return u.length
// 						? {
// 								mode: "multiline",
// 								name: n.name || c(n),
// 								message: t[0],
// 								stackString: m(l),
// 								frames: u,
// 						  }
// 						: null;
// 				}
// 				var p = n(41),
// 					m = n(28),
// 					h = Object.prototype.hasOwnProperty,
// 					v = !1,
// 					g = /function (.+?)\s*\(/,
// 					y = /^\s*at (?:((?:\[object object\])?(?:[^(]*\([^)]*\))*[^()]*(?: \[as \S+\])?) )?\(?((?:file|http|https|chrome-extension):.*?)?:(\d+)(?::(\d+))?\)?\s*$/i,
// 					x = /^\s*(?:(\S*|global code)(?:\(.*?\))?@)?((?:file|http|https|chrome|safari-extension).*?):(\d+)(?::(\d+))?\s*$/i,
// 					b = /^\s*at .+ \(eval at \S+ \((?:(?:file|http|https):[^)]+)?\)(?:, [^:]*:\d+:\d+)?\)$/i,
// 					w = /^\s*at Function code \(Function code:\d+:\d+\)\s*/i;
// 				t.exports = r;
// 			},
// 			{},
// 		],
// 		28: [
// 			function (n, t, e) {
// 				function r(n) {
// 					var t;
// 					if (n.length > 100) {
// 						var e = n.length - 100;
// 						(t = n.slice(0, 50).join("\n")),
// 							(t += "\n< ...truncated " + e + " lines... >\n"),
// 							(t += n.slice(-50).join("\n"));
// 					} else t = n.join("\n");
// 					return t;
// 				}
// 				function o(n) {
// 					return n.length > a ? n.substr(0, a) : n;
// 				}
// 				var i = /^\n+|\n+$/g,
// 					a = 65530;
// 				(t.exports = function (n) {
// 					return r(n).replace(i, "");
// 				}),
// 					(t.exports.truncateSize = o);
// 			},
// 			{},
// 		],
// 		29: [
// 			function (n, t, e) {
// 				function r(n) {
// 					var t = d.take(["err", "ierr"]);
// 					n.retry && (l = t);
// 					var e = { body: t, qs: {} },
// 						r = T(g.releaseIds);
// 					return (
// 						"{}" !== r && (e.qs.ri = r),
// 						t && t.err && t.err.length && !q && ((e.qs.pve = "1"), (q = !0)),
// 						e
// 					);
// 				}
// 				function o(n) {
// 					n.sent || k.pingErrors(g),
// 						n.retry &&
// 							l &&
// 							(A(l, function (n, t) {
// 								for (var e = 0; e < t.length; e++) {
// 									var r = t[e],
// 										o = a(r.params, r.custom);
// 									d.merge(n, o, r.metrics, r.params, r.custom);
// 								}
// 							}),
// 							(l = null));
// 				}
// 				function i(n) {
// 					return v(n.exceptionClass) ^ n.stackHash;
// 				}
// 				function a(n, t) {
// 					return i(n) + ":" + v(T(t));
// 				}
// 				function s(n, t) {
// 					if ("string" != typeof n) return "";
// 					var e = m(n);
// 					return e === t ? "<inline>" : e;
// 				}
// 				function u(n, t) {
// 					for (var e = "", r = 0; r < n.frames.length; r++) {
// 						var o = n.frames[r],
// 							i = p(o.func);
// 						e && (e += "\n"),
// 							i && (e += i + "@"),
// 							"string" == typeof o.url && (e += o.url),
// 							o.line && (e += ":" + o.line);
// 					}
// 					return e;
// 				}
// 				function c(n) {
// 					for (var t = m(g.origin), e = 0; e < n.frames.length; e++) {
// 						var r = n.frames[e],
// 							o = r.url,
// 							i = s(o, t);
// 						i &&
// 							i !== r.url &&
// 							((r.url = i), (n.stackString = n.stackString.split(o).join(i)));
// 					}
// 					return n;
// 				}
// 				function f(n, t, e, r) {
// 					function o(n, t) {
// 						y[n] = t && "object" == typeof t ? T(t) : t;
// 					}
// 					if (((t = t || g.now()), e || !g.onerror || !g.onerror(n))) {
// 						var a = c(h(n)),
// 							s = u(a),
// 							f = {
// 								stackHash: v(s),
// 								exceptionClass: a.name,
// 								request_uri: window.location.pathname,
// 							};
// 						a.message && (f.message = "" + a.message),
// 							x[f.stackHash]
// 								? (f.browser_stack_hash = v(a.stackString))
// 								: ((x[f.stackHash] = !0), (f.stack_trace = M(a.stackString))),
// 							(f.releaseIds = T(g.releaseIds));
// 						var l = i(f);
// 						b[l] || ((f.pageview = 1), (b[l] = !0));
// 						var p = e ? "ierr" : "err",
// 							m = { time: t };
// 						if ((S("errorAgg", [p, l, f, m]), null != f._interactionId))
// 							(N[f._interactionId] = N[f._interactionId] || []),
// 								N[f._interactionId].push([p, l, f, m, w, r]);
// 						else {
// 							var y = {},
// 								w = g.info.jsAttributes;
// 							A(w, o), r && A(r, o);
// 							var k = v(T(y)),
// 								j = l + ":" + k;
// 							d.store(p, j, f, m, y);
// 						}
// 					}
// 				}
// 				var l,
// 					d = n(2),
// 					p = n(26),
// 					m = n(5),
// 					h = n(27),
// 					v = n(30),
// 					g = n("loader"),
// 					y = n("ee"),
// 					x = {},
// 					b = {},
// 					w = n(17),
// 					k = n(10),
// 					j = n(9),
// 					T = n(22),
// 					S = n("handle"),
// 					E = n("ee"),
// 					A = n(38),
// 					H = n(35),
// 					M = n(28).truncateSize,
// 					N = {};
// 				if ((n(20), g.features.err)) {
// 					var q = !1,
// 						C = H.getConfiguration("jserrors.harvestTimeSeconds") || 60;
// 					y.on("feat-err", function () {
// 						w("err", f), w("ierr", f), k.on("jserrors", r);
// 						var n = new j(g, "jserrors", { onFinished: o });
// 						n.startTimer(C);
// 					}),
// 						k.pingErrors(g),
// 						E.on("interactionSaved", function (n) {
// 							N[n.id] &&
// 								(N[n.id].forEach(function (t) {
// 									function e(n, t) {
// 										r[n] = t && "object" == typeof t ? T(t) : t;
// 									}
// 									var r = {},
// 										o = t[4],
// 										i = t[5];
// 									A(o, e), A(n.root.attrs.custom, e), A(i, e);
// 									var a = t[2];
// 									(a.browserInteractionId = n.root.attrs.id),
// 										delete a._interactionId,
// 										a._interactionNodeId &&
// 											((a.parentNodeId = a._interactionNodeId.toString()),
// 											delete a._interactionNodeId);
// 									var s = t[1] + n.root.attrs.id,
// 										u = v(T(r)),
// 										c = s + ":" + u;
// 									d.store(t[0], c, a, t[3], r);
// 								}),
// 								delete N[n.id]);
// 						}),
// 						E.on("interactionDiscarded", function (n) {
// 							N[n.id] &&
// 								(N[n.id].forEach(function (t) {
// 									function e(n, t) {
// 										r[n] = t && "object" == typeof t ? T(t) : t;
// 									}
// 									var r = {},
// 										o = t[4],
// 										i = t[5];
// 									A(o, e), A(n.root.attrs.custom, e), A(i, e);
// 									var a = t[2];
// 									delete a._interactionId, delete a._interactionNodeId;
// 									var s = t[1],
// 										u = v(T(r)),
// 										c = s + ":" + u;
// 									d.store(t[0], c, t[2], t[3], r);
// 								}),
// 								delete N[n.id]);
// 						});
// 				}
// 			},
// 			{},
// 		],
// 		30: [
// 			function (n, t, e) {
// 				function r(n) {
// 					var t,
// 						e = 0;
// 					if (!n || !n.length) return e;
// 					for (var r = 0; r < n.length; r++)
// 						(t = n.charCodeAt(r)), (e = (e << 5) - e + t), (e = 0 | e);
// 					return e;
// 				}
// 				t.exports = r;
// 			},
// 			{},
// 		],
// 		31: [
// 			function (n, t, e) {
// 				function r(n) {
// 					var t = {
// 						qs: { ua: f.info.userAttributes, at: f.info.atts },
// 						body: { ins: w },
// 					};
// 					return n.retry && (u = w), (w = []), t;
// 				}
// 				function o(n) {
// 					n && n.sent && n.retry && u && ((w = w.concat(u)), (u = null));
// 				}
// 				function i(n, t, e) {
// 					function r(n, t) {
// 						a[n] = t && "object" == typeof t ? d(t) : t;
// 					}
// 					if (!(w.length >= b)) {
// 						var o,
// 							i,
// 							a = {};
// 						"undefined" != typeof window &&
// 							window.document &&
// 							window.document.documentElement &&
// 							((o = window.document.documentElement.clientWidth),
// 							(i = window.document.documentElement.clientHeight));
// 						var u = {
// 							timestamp: n + f.offset,
// 							timeSinceLoad: n / 1e3,
// 							browserWidth: o,
// 							browserHeight: i,
// 							referrerUrl: s,
// 							currentUrl: v("" + location),
// 							pageUrl: v(f.origin),
// 							eventType: "PageAction",
// 						};
// 						l(u, r),
// 							l(k, r),
// 							e && "object" == typeof e && l(e, r),
// 							(a.actionName = t || ""),
// 							w.push(a);
// 					}
// 				}
// 				function a(n, t, e) {
// 					k[t] = e;
// 				}
// 				var s,
// 					u,
// 					c = n("ee"),
// 					f = n("loader"),
// 					l = n(38),
// 					d = n(22),
// 					p = n(17),
// 					m = n(10),
// 					h = n(9),
// 					v = n(5),
// 					g = n(35),
// 					y = 120,
// 					x = g.getConfiguration("ins.harvestTimeSeconds") || 30,
// 					b = (y * x) / 60,
// 					w = [],
// 					k = (f.info.jsAttributes = {});
// 				document.referrer && (s = v(document.referrer)),
// 					p("api-setCustomAttribute", a, "api"),
// 					c.on("feat-ins", function () {
// 						p("api-addPageAction", i), m.on("ins", r);
// 						var n = new h(f, "ins", { onFinished: o });
// 						n.startTimer(x, 0);
// 					});
// 			},
// 			{},
// 		],
// 		32: [
// 			function (n, t, e) {
// 				function r(n) {
// 					var t,
// 						e,
// 						r,
// 						o = Date.now();
// 					for (t in n)
// 						(e = n[t]),
// 							"number" == typeof e &&
// 								e > 0 &&
// 								e < o &&
// 								((r = n[t] - b.offset),
// 								d({ n: t, s: r, e: r, o: "document", t: "timing" }));
// 				}
// 				function o(n, t, e, r) {
// 					var o = "timer";
// 					"requestAnimationFrame" === r && (o = r);
// 					var i = { n: r, s: t, e: e, o: "window", t: o };
// 					d(i);
// 				}
// 				function i(n, t, e, r) {
// 					if (n.type in q) return !1;
// 					var o = { n: a(n.type), s: e, e: r, t: "event" };
// 					try {
// 						o.o = s(n.target, t);
// 					} catch (i) {
// 						o.o = s(null, t);
// 					}
// 					d(o);
// 				}
// 				function a(n) {
// 					var t = n;
// 					return (
// 						T(R, function (e, r) {
// 							n in r && (t = e);
// 						}),
// 						t
// 					);
// 				}
// 				function s(n, t) {
// 					var e = "unknown";
// 					if (n && n instanceof XMLHttpRequest) {
// 						var r = P.context(n).params;
// 						e = r.status + " " + r.method + ": " + r.host + r.pathname;
// 					} else
// 						n &&
// 							"string" == typeof n.tagName &&
// 							((e = n.tagName.toLowerCase()),
// 							n.id && (e += "#" + n.id),
// 							n.className && (e += "." + A(n.classList).join(".")));
// 					return (
// 						"unknown" === e &&
// 							(t === document
// 								? (e = "document")
// 								: t === window
// 								? (e = "window")
// 								: t instanceof FileReader && (e = "FileReader")),
// 						e
// 					);
// 				}
// 				function u(n, t, e) {
// 					var r = { n: "history.pushState", s: e, e: e, o: n, t: t };
// 					d(r);
// 				}
// 				function c(n) {
// 					n.forEach(function (n) {
// 						var t = H(n.name),
// 							e = {
// 								n: n.initiatorType,
// 								s: 0 | n.fetchStart,
// 								e: 0 | n.responseEnd,
// 								o: t.protocol + "://" + t.hostname + ":" + t.port + t.pathname,
// 								t: n.entryType,
// 							};
// 						e.s < F || ((F = e.s), d(e));
// 					});
// 				}
// 				function f(n, t, e, r) {
// 					if ("err" === n) {
// 						var o = {
// 							n: "error",
// 							s: r.time,
// 							e: r.time,
// 							o: e.message,
// 							t: e.stackHash,
// 						};
// 						d(o);
// 					}
// 				}
// 				function l(n, t, e, r) {
// 					if ("xhr" === n) {
// 						var o = {
// 							n: "Ajax",
// 							s: r.time,
// 							e: r.time + r.duration,
// 							o: e.status + " " + e.method + ": " + e.host + e.pathname,
// 							t: "ajax",
// 						};
// 						d(o);
// 					}
// 				}
// 				function d(n) {
// 					if (!(I >= B)) {
// 						var t = _[n.n];
// 						t || (t = _[n.n] = []), t.push(n), I++;
// 					}
// 				}
// 				function p(n, t) {
// 					if (!(I >= B)) {
// 						var e = _[n];
// 						e || (e = _[n] = []), (_[n] = t.concat(e)), (I += t.length);
// 					}
// 				}
// 				function m(n) {
// 					c(window.performance.getEntriesByType("resource"));
// 					var t = S(
// 						T(_, function (n, t) {
// 							return n in C ? S(T(S(t.sort(h), v(n), {}), g), y, []) : t;
// 						}),
// 						y,
// 						[]
// 					);
// 					if (0 === t.length) return {};
// 					n && (U = _), (_ = {}), (I = 0);
// 					var e = { qs: { st: "" + b.offset, ptid: N }, body: { res: t } };
// 					if (!N) {
// 						(e.qs.ua = b.info.userAttributes), (e.qs.at = b.info.atts);
// 						var r = E(b.info.jsAttributes);
// 						e.qs.ja = "{}" === r ? null : r;
// 					}
// 					return e;
// 				}
// 				function h(n, t) {
// 					return n.s - t.s;
// 				}
// 				function v(n) {
// 					var t = C[n][0],
// 						e = C[n][1],
// 						r = {};
// 					return function (o, i) {
// 						var a = o[i.o];
// 						a || (a = o[i.o] = []);
// 						var s = r[i.o];
// 						return (
// 							"scrolling" !== n || x(i)
// 								? s && i.s - s.s < e && s.e > i.s - t
// 									? (s.e = i.e)
// 									: ((r[i.o] = i), a.push(i))
// 								: ((r[i.o] = null), (i.n = "scroll"), a.push(i)),
// 							o
// 						);
// 					};
// 				}
// 				function g(n, t) {
// 					return t;
// 				}
// 				function y(n, t) {
// 					return n.concat(t);
// 				}
// 				function x(n) {
// 					var t = 4;
// 					return !!(
// 						n &&
// 						"number" == typeof n.e &&
// 						"number" == typeof n.s &&
// 						n.e - n.s < t
// 					);
// 				}
// 				var b = n("loader"),
// 					w = n(17),
// 					k = n(10),
// 					j = n(9),
// 					T = n(38),
// 					S = n(41),
// 					E = n(22),
// 					A = n(39),
// 					H = n(34),
// 					M = n(35);
// 				if (k.xhrUsable && b.xhrWrappable) {
// 					var N = "",
// 						q = { mouseup: !0, mousedown: !0 },
// 						C = {
// 							typing: [1e3, 2e3],
// 							scrolling: [100, 1e3],
// 							mousing: [1e3, 2e3],
// 							touching: [1e3, 2e3],
// 						},
// 						R = {
// 							typing: { keydown: !0, keyup: !0, keypress: !0 },
// 							mousing: {
// 								mousemove: !0,
// 								mouseenter: !0,
// 								mouseleave: !0,
// 								mouseover: !0,
// 								mouseout: !0,
// 							},
// 							scrolling: { scroll: !0 },
// 							touching: {
// 								touchstart: !0,
// 								touchmove: !0,
// 								touchend: !0,
// 								touchcancel: !0,
// 								touchenter: !0,
// 								touchleave: !0,
// 							},
// 						},
// 						_ = {},
// 						I = 0,
// 						U = null,
// 						L = M.getConfiguration("stn.harvestTimeSeconds") || 10,
// 						B = M.getConfiguration("stn.maxNodesPerHarvest") || 1e3,
// 						P = n("ee");
// 					if (((t.exports = { _takeSTNs: m }), n(20), b.features.stn)) {
// 						P.on("feat-stn", function () {
// 							function n(n) {
// 								n.sent &&
// 									n.responseText &&
// 									!N &&
// 									((N = n.responseText), e.startTimer(L)),
// 									n.sent &&
// 										n.retry &&
// 										U &&
// 										(T(U, function (n, t) {
// 											p(n, t);
// 										}),
// 										(U = null));
// 							}
// 							function t(n) {
// 								if (b.now() > 9e5) return e.stopTimer(), void (_ = {});
// 								if (!(N && I <= 30)) return m(n.retry);
// 							}
// 							r(window.performance.timing), k.on("resources", t);
// 							var e = new j(b, "resources", { onFinished: n, retryDelay: L });
// 							e.runHarvest({ needResponse: !0 }),
// 								w("bst", i),
// 								w("bstTimer", o),
// 								w("bstResource", c),
// 								w("bstHist", u),
// 								w("bstXhrAgg", l),
// 								w("bstApi", d),
// 								w("errorAgg", f);
// 						});
// 						var F = 0;
// 					}
// 				}
// 			},
// 			{},
// 		],
// 		33: [
// 			function (n, t, e) {
// 				function r(n, t, e) {
// 					t.time = e;
// 					var r,
// 						i = "xhr";
// 					(r = s(n.cat ? [n.status, n.cat] : [n.status, n.host, n.pathname])),
// 						f("bstXhrAgg", [i, r, n, t]),
// 						o.store(i, r, n, t);
// 				}
// 				var o = n(2),
// 					i = n(17),
// 					a = n(10),
// 					s = n(22),
// 					u = n("loader"),
// 					c = n("ee"),
// 					f = n("handle");
// 				u.features.xhr &&
// 					(a.on("jserrors", function () {
// 						return { body: o.take(["xhr"]) };
// 					}),
// 					c.on("feat-err", function () {
// 						i("xhr", r);
// 					}),
// 					(t.exports = r));
// 			},
// 			{},
// 		],
// 		34: [
// 			function (n, t, e) {
// 				var r = {};
// 				t.exports = function (n) {
// 					if (n in r) return r[n];
// 					var t = document.createElement("a"),
// 						e = window.location,
// 						o = {};
// 					(t.href = n), (o.port = t.port);
// 					var i = t.href.split("://");
// 					!o.port &&
// 						i[1] &&
// 						(o.port = i[1].split("/")[0].split("@").pop().split(":")[1]),
// 						(o.port && "0" !== o.port) ||
// 							(o.port = "https" === i[0] ? "443" : "80"),
// 						(o.hostname = t.hostname || e.hostname),
// 						(o.pathname = t.pathname),
// 						(o.protocol = i[0]),
// 						"/" !== o.pathname.charAt(0) && (o.pathname = "/" + o.pathname);
// 					var a =
// 							!t.protocol || ":" === t.protocol || t.protocol === e.protocol,
// 						s = t.hostname === document.domain && t.port === e.port;
// 					return (
// 						(o.sameOrigin = a && (!t.hostname || s)),
// 						"/" === o.pathname && (r[n] = o),
// 						o
// 					);
// 				};
// 			},
// 			{},
// 		],
// 		35: [
// 			function (n, t, e) {
// 				function r(n) {
// 					if (NREUM.init) {
// 						for (
// 							var t = NREUM.init, e = n.split("."), r = 0;
// 							r < e.length - 1;
// 							r++
// 						)
// 							if (((t = t[e[r]]), "object" != typeof t)) return;
// 						return (t = t[e[e.length - 1]]);
// 					}
// 				}
// 				t.exports = { getConfiguration: r };
// 			},
// 			{},
// 		],
// 		36: [
// 			function (n, t, e) {
// 				var r = 0,
// 					o = navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);
// 				o && (r = +o[1]), (t.exports = r);
// 			},
// 			{},
// 		],
// 		37: [
// 			function (n, t, e) {
// 				function r() {
// 					return s.exists && performance.now
// 						? Math.round(performance.now())
// 						: (i = Math.max(new Date().getTime(), i)) - a;
// 				}
// 				function o() {
// 					return i;
// 				}
// 				var i = new Date().getTime(),
// 					a = i,
// 					s = n(40);
// 				(t.exports = r),
// 					(t.exports.offset = a),
// 					(t.exports.getLastTimestamp = o);
// 			},
// 			{},
// 		],
// 		38: [
// 			function (n, t, e) {
// 				function r(n, t) {
// 					var e = [],
// 						r = "",
// 						i = 0;
// 					for (r in n) o.call(n, r) && ((e[i] = t(r, n[r])), (i += 1));
// 					return e;
// 				}
// 				var o = Object.prototype.hasOwnProperty;
// 				t.exports = r;
// 			},
// 			{},
// 		],
// 		39: [
// 			function (n, t, e) {
// 				function r(n, t, e) {
// 					t || (t = 0), "undefined" == typeof e && (e = n ? n.length : 0);
// 					for (var r = -1, o = e - t || 0, i = Array(o < 0 ? 0 : o); ++r < o; )
// 						i[r] = n[t + r];
// 					return i;
// 				}
// 				t.exports = r;
// 			},
// 			{},
// 		],
// 		40: [
// 			function (n, t, e) {
// 				t.exports = {
// 					exists:
// 						"undefined" != typeof window.performance &&
// 						window.performance.timing &&
// 						"undefined" != typeof window.performance.timing.navigationStart,
// 				};
// 			},
// 			{},
// 		],
// 		41: [
// 			function (n, t, e) {
// 				function r(n, t, e) {
// 					var r = 0;
// 					for (
// 						"undefined" == typeof e && ((e = n[0]), (r = 1)), r;
// 						r < n.length;
// 						r++
// 					)
// 						e = t(e, n[r]);
// 					return e;
// 				}
// 				t.exports = r;
// 			},
// 			{},
// 		],
// 	},
// 	{},
// 	[29, 33, 32, 31, 12]
// );

////////////////////////

// function drop() {
// 	$(".ulcls").toggle();
// }
// function dropwhat() {
// 	$(".ulclsw").toggle();
// }

// function ques1() {
// 	$(".answer1").toggle("slow");
// }
// function ques2() {
// 	$(".answer2").toggle("slow");
// }
// function ques3() {
// 	$(".answer3").toggle("slow");
// }
// function getreview() {
// 	$(".review").slideToggle();
// }


