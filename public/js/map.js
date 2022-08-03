$(window).on("load", function () {
  // var location = [adresse[0], $("#map-cont").attr("lat"), $("#map-cont").attr("long")];
  const branches = [
    [24.774255, 46.737586534],
    [24.874265, 46.73816],
    [23.774265, 46.73865445654],
    [24.774264, 46.7385454586],
    [24.775265, 46.586],
  ];
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center: new google.maps.LatLng(24.774265, 46.738586),
  });

  const contentString =
    '<div class="branch">' +
    '<h3 class="branch-name">' +
    "الرياض شارع الملك عبد العزيز عمارة رقم 50" +
    "</h3>" +
    '<div class="branch-info">' +
    "<span>مواعيد العمل</span>  " +
    "من التاسعة صباحا حتى الخامسة مساء" +
    "</div>" +
    '<div class="branch-info">' +
    "<span>رقم الجوال</span> " +
    '<a href="tel:+965 5255 3250">+965 5255 3250</a>' +
    "</div>" +
    "</div>";

  const infowindow = new google.maps.InfoWindow({
    content: contentString,
  });

  for (let i = 0; i < branches.length; i++) {
    const product = branches[i];
    const marker = new google.maps.Marker({
      position: new google.maps.LatLng(product[0], product[1]),
      map,
      icon: "images/pin.png",
    });
    marker.addListener("click", () => {
      infowindow.open(map, marker);
    });
  }
});
