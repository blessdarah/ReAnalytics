new gridjs.Grid({
    columns: [
        {
            name: "#",
            sort: { enabled: !1 },
            formatter: function (e) {
                return gridjs.html(
                    '<div class="form-check font-size-16"><input class="form-check-input" type="checkbox" id="orderidcheck01"><label class="form-check-label" for="orderidcheck01"></label></div>'
                );
            },
        },
        {
            name: "Order ID",
            formatter: function (e) {
                return gridjs.html(
                    '<span class="fw-semibold">' + e + "</span>"
                );
            },
        },
        "Date",
        "Billing Name",
        "Amount",
        {
            name: "Status",
            formatter: function (e) {
                switch (e) {
                    case "Paid":
                        return gridjs.html(
                            '<span class="badge badge-pill badge-soft-success font-size-12">' +
                                e +
                                "</span>"
                        );
                    case "Pending":
                        return gridjs.html(
                            '<span class="badge badge-pill badge-soft-warning font-size-12">' +
                                e +
                                "</span>"
                        );
                    default:
                        return gridjs.html(
                            '<span class="badge badge-pill badge-soft-success font-size-12">' +
                                e +
                                "</span>"
                        );
                }
            },
        },
        {
            name: "Action",
            sort: { enabled: !1 },
            formatter: function (e) {
                return gridjs.html(
                    '<div class="dropdown"><button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="#">Edit</a></li><li><a class="dropdown-item" href="#">Print</a></li><li><a class="dropdown-item" href="#">Delete</a></li></ul></div>'
                );
            },
        },
    ],
    pagination: { limit: 10 },
    sort: !0,
    search: !0,
    data: [
        [
            "",
            "#DS0215",
            "07 Oct, 2021",
            "Connie Franco",
            "$26.30",
            "Paid",
            "View Details",
        ],
        [
            "",
            "#DS0214",
            "05 Oct, 2021",
            "Paul Reynolds",
            "$24.20",
            "Paid",
            "View Details",
        ],
        [
            "",
            "#DS0214",
            "06 Oct, 2021",
            "Ronald Patterson",
            "$65.32",
            "Pending",
            "View Details",
        ],
        [
            "",
            "#DS0212",
            "07 Oct, 2021",
            "Adella Perez",
            "$53.32",
            "Paid",
            "View Details",
        ],
        [
            "",
            "#DS0211",
            "07 Oct, 2021",
            "Theresa Mayers",
            "$13.21",
            "Paid",
            "View Details",
        ],
        [
            "",
            "#DS0210",
            "06 Oct, 2021",
            "Michael Wallace",
            "$23.41",
            "Pending",
            "View Details",
        ],
        [
            "",
            "#DS0209",
            "07 Oct, 2021",
            "Oliver Gonzales",
            "$41.23",
            "Pending",
            "View Details",
        ],
        [
            "",
            "#DS0208",
            "08 Oct, 2021",
            "David Burke",
            "$32.25",
            "Paid",
            "View Details",
        ],
        [
            "",
            "#DS0207",
            "09 Oct, 2021",
            "Willie Verner",
            "$53.21",
            "Pending",
            "View Details",
        ],
        [
            "",
            "#DS0206",
            "07 Oct, 2021",
            "Felix Perry",
            "$63.21",
            "Paid",
            "View Details",
        ],
        [
            "",
            "#SK4526",
            "05 Oct, 2021",
            "Stacie Parker",
            "$63.85",
            "Pending",
            "View Details",
        ],
        [
            "",
            "#SK8522",
            "06 Oct, 2021",
            "Betty Wilson",
            "$32.12",
            "Pending",
            "View Details",
        ],
        [
            "",
            "#SK4545",
            "07 Oct, 2021",
            "Roman Crabtree",
            "$45.62",
            "Paid",
            "View Details",
        ],
        [
            "",
            "#SK9652",
            "07 Oct, 2021",
            "Marisela Butler",
            "$62.35",
            "Pending",
            "View Details",
        ],
        [
            "",
            "#SK4256",
            "06 Oct, 2021",
            "Roger Slayton",
            "$45.62",
            "Paid",
            "View Details",
        ],
        [
            "",
            "#SK4125",
            "07 Oct, 2021",
            "Barbara Torres",
            "$42.63",
            "Paid",
            "View Details",
        ],
        [
            "",
            "#SK6523",
            "08 Oct, 2021",
            "Daniel Rigney",
            "$32.54",
            "Pending",
            "View Details",
        ],
        [
            "",
            "#SK6563",
            "09 Oct, 2021",
            "Kenneth Linck",
            "$52.62",
            "Pending",
            "View Details",
        ],
    ],
}).render(document.getElementById("table-invoices-list")),
    flatpickr("#datepicker-range", { mode: "range" }),
    flatpickr("#datepicker-invoice");
var currentTab = 0;
function showTab(e) {
    var t = document.getElementsByClassName("wizard-tab");
    (t[e].style.display = "block"),
        (document.getElementById("prevBtn").style.display =
            0 == e ? "none" : "inline"),
        e == t.length - 1
            ? (document.getElementById("nextBtn").innerHTML = "Add")
            : (document.getElementById("nextBtn").innerHTML = "Next"),
        fixStepIndicator(e);
}
function nextPrev(e) {
    var t = document.getElementsByClassName("wizard-tab");
    (t[currentTab].style.display = "none"),
        (currentTab += e) >= t.length &&
            (t[(currentTab -= e)].style.display = "block"),
        showTab(currentTab);
}
function fixStepIndicator(e) {
    for (
        var t = document.getElementsByClassName("list-item"), a = 0;
        a < t.length;
        a++
    )
        t[a].className = t[a].className.replace(" active", "");
    t[e].className += " active";
}
showTab(currentTab);
