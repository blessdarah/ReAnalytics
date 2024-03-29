var basicRating = raterJs({
        starSize: 22,
        rating: 3,
        element: document.querySelector("#basic-rater"),
        rateCallback: function (e, t) {
            this.setRating(e), t();
        },
    }),
    starRatingStep = raterJs({
        starSize: 22,
        step: 0.5,
        element: document.querySelector("#rater-step"),
        rateCallback: function (e, t) {
            this.setRating(e), t();
        },
    }),
    messageDataService = {
        rate: function (e) {
            return {
                then: function (e) {
                    setTimeout(function () {
                        e(5 * Math.random());
                    }, 1e3);
                },
            };
        },
    },
    starRatingmessage = raterJs({
        isBusyText: "Rating in progress. Please wait...",
        starSize: 22,
        element: document.querySelector("#rater-message"),
        rateCallback: function (e, t) {
            starRatingmessage.setRating(e),
                messageDataService.rate().then(function (e) {
                    starRatingmessage.setRating(e), t();
                });
        },
    }),
    starRatingunlimited = raterJs({
        max: 16,
        readOnly: !0,
        rating: 4.4,
        element: document.querySelector("#rater-unlimitedstar"),
    }),
    starRatinghover = raterJs({
        starSize: 22,
        element: document.querySelector("#rater-onhover"),
        rateCallback: function (e, t) {
            this.setRating(e), t();
        },
        onHover: function (e, t) {
            document.querySelector(".ratingnum").textContent = e;
        },
        onLeave: function (e, t) {
            document.querySelector(".ratingnum").textContent = t;
        },
    }),
    starRatingreset = raterJs({
        starSize: 22,
        element: document.querySelector("#raterreset"),
        rateCallback: function (e, t) {
            this.setRating(e), t();
        },
    });
document.querySelector("#raterreset-button").addEventListener(
    "click",
    function () {
        starRatingreset.clear(), console.log(starRatingreset.getRating());
    },
    !1
);
