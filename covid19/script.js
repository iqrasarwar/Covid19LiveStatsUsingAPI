
function fetchAPIData()
{
   fetch();
   $.get("https://api.covid19api.com/summary",
      function(data)
      {
         let confirmed = document.getElementsByClassName("count");
         confirmed[0].innerHTML = data['Global']['TotalConfirmed'];
         confirmed[1].innerHTML = data['Global']['TotalDeaths'];
         confirmed[2].innerHTML = data['Global']['TotalRecovered'];
         confirmed[3].innerHTML = data['Global']['NewConfirmed'];

      }
   )
}
function fetch()
{
   $.get("https://api.covid19api.com/summary",
      function(data)
      {
         var x = document.getElementById("tab");
         for (let index = 0; index < data['Countries'].length; index++) {
            x.innerHTML+="<tr><td>"+ data['Countries'][index]["Country"]+"</td><td>"+ data['Countries'][index]["CountryCode"]+"</td><td>"+ data['Countries'][index]["TotalConfirmed"]+"</td><td>"+ data['Countries'][index]["NewConfirmed"]+"</td><td>"+data['Countries'][index]["TotalDeaths"] +"</td><td>"+data['Countries'][index]["NewDeaths"] +"</td><td>"+ data['Countries'][index]["TotalRecovered"]+"</td><td>"+ data['Countries'][index]["NewRecovered"]+"</td></tr>";
         }

      }
   )
}

