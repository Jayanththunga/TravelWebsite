async function news(){
   let parseData;
   let url ="https://newsapi.org/v2/everything?q=tourism&apiKey=efc51d75ddc8402e9ebe9192b1df1390";
   let data = await fetch(url);
   parseData = await data.json();
   let total=parseData.totalResults;
   for(var i=0;i<6;i++){
   let div=document.createElement('div');
   div.class="cardnews";
   div.innerHTML='<div class="card" style="padding:20px; margin:10px;"><img src="" class="img1" class="card-img-top" alt="..."><b><i><u><p class="tt"></p></u></i></b><span class="des"></span><a href="" class="anc" target="_blank" style="text-decoration:none"><p style="font-size:25px;font-weight:bolder">More..</a></div>;'   
   document.querySelector("#news").appendChild(div);
   document.getElementsByClassName("tt")[i].innerHTML=parseData.articles[i].title;
   document.getElementsByClassName("img1")[i].src=parseData.articles[i].urlToImage;
   document.getElementsByClassName("des")[i].innerHTML=parseData.articles[i].description.slice(0,200);
   document.getElementsByClassName("anc")[i].href=parseData.articles[i].url;
   document.getElementsByClassName("img1")[i].style.maxWidth="350px";
   document.getElementsByClassName("img1")[i].style.maxHeight="240px";
   }

}

















// async function hotel(){
//    const options = {
//       method: 'GET',
//       headers: {
//          'X-RapidAPI-Key': '2782ef3402msh23f10961ae392f6p1794a0jsn3f4116959f9d',
//          'X-RapidAPI-Host': 'best-booking-com-hotel.p.rapidapi.com'
//       }
//    };
//    let country=document.getElementById("country");
//    let location=document.getElementById("location");
//    fetch('https://best-booking-com-hotel.p.rapidapi.com/booking/best-accommodation?cityName='+ location +'&countryName='+country, options)
//    .then((response) => {
//       if (!response.ok) {
//         alert("No Hotels Found");
//         throw new Error("No Hotel found.");
//       }
//       return response.json();
//     })
//    .then((data) => this.displayWeather(data));
   


// }

