var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

function Mission () {
    document.getElementById("Mission").innerHTML = "Since 1977, Valley Sports has provided high quality athletic goods, team apparel needs, and first-class customer service in Shakopee, MN. A family-run business since 1990, we pride ourselves on being reliable, trustworthy, and dedicated to service. ";
}


function History () {
    document.getElementById("History").innerHTML = "Valley Sports was established in 1977 on the corner of 1st Avenue and Holmes Street in Historic Downtown Shakopee, MN. In 1978, Dave Jansen began working at Valley Sports and later became the owner in 1990. Dave's nephew, Tony Jansen, spent endless hours at his uncle's shop. Tony finally began collecting a paycheck in 1999, and in 2014, Dave felt Tony was ready to take over the reins of ownership. Since retiring, Dave has continued to be a mentor to Tony. We are proud to have been a staple in Shakopee since 1977. Our store is invested in our community, and has helped kids in the community for over 40 years by sponsoring local sports associations. ";
}

