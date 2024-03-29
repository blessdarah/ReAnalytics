function getChartColorsArray(e) {
    if ((console.log(e), null !== document.getElementById(e))) {
        var r = document.getElementById(e).getAttribute("data-colors");
        return (r = JSON.parse(r)).map(function (e) {
            var r = e.replace(" ", "");
            if (-1 == r.indexOf("--")) return r;
            var t = getComputedStyle(document.documentElement).getPropertyValue(
                r
            );
            return t || void 0;
        });
    }
}
var barchartColors = getChartColorsArray("chart-radialBar"),
    options = {
        series: [76],
        chart: { type: "radialBar", height: 260, sparkline: { enabled: !0 } },
        plotOptions: {
            radialBar: {
                startAngle: -90,
                endAngle: 90,
                track: {
                    background: "#f3f2f9",
                    strokeWidth: "97%",
                    margin: 5,
                    dropShadow: {
                        enabled: !1,
                        top: 2,
                        left: 0,
                        color: "#999",
                        opacity: 1,
                        blur: 2,
                    },
                },
                hollow: { margin: 15, size: "65%" },
                dataLabels: {
                    name: { show: !1 },
                    value: { offsetY: -2, fontSize: "22px" },
                },
            },
        },
        stroke: { lineCap: "round" },
        grid: { padding: { top: -10 } },
        fill: { opacity: 1 },
        colors: barchartColors,
        labels: ["Average Results"],
    },
    chart = new ApexCharts(document.querySelector("#chart-radialBar"), options);
chart.render();
