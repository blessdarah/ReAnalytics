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
var barchartColors = getChartColorsArray("overview-chart"),
    options = {
        chart: { height: 280, type: "bar", toolbar: { show: !1 } },
        plotOptions: {
            bar: {
                columnWidth: "20%",
                endingShape: "rounded",
                borderRadius: 6,
            },
        },
        dataLabels: { enabled: !1 },
        fill: { opacity: 1 },
        series: [{ name: "Tasks", data: [52, 66, 50, 74, 36, 52, 66] }],
        grid: { yaxis: { lines: { show: !1 } } },
        yaxis: {
            labels: {
                formatter: function (e) {
                    return e + "hrs";
                },
            },
        },
        xaxis: {
            labels: { rotate: -90 },
            categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
        },
        colors: barchartColors,
    },
    chart = new ApexCharts(document.querySelector("#overview-chart"), options);
chart.render(), flatpickr("#CreateTask-due-date");
