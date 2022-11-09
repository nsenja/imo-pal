$.ajax({
    url: "/details{id}",
    data: {
        id: $id,
    },
    type: "GET",
    success: function (data) {
        document.getElementById("no_imo").value = data.no_imo;
        document.getElementById("description").value = data.description;
    },
}); 
