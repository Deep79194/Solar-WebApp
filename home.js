$(document).ready(function () {
  $("#mytab").dataTable({
    paging: true,
    searching: true,
    ordering: true,
    info: true,
    order: [
      [0, "asc"],
      [1, "desc"],
    ],
  });
});
