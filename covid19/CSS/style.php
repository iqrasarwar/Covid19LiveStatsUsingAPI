<style type="text/css">
body{
  padding:0 !important;
  font-family: 'Chakra Petch', sans-serif;
}
.nav-link, .navbar-brand
{
    color:red !important;
    font-weight: bold;
    font-size: larger;
}
#virusImg
{
    width: 70px !important;
    height: 70px !important;
    animation: rotation 2s infinite linear;
}
#humman
{
    width: 300px;
    height: 300px;
    animation: stretch 1.5s ease-out 0s alternate infinite none running;
}
@keyframes rotation {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(359deg);
    }
  }
  @keyframes stretch {
    0% {
      transform: scale(0.7);
    }
    100% {
      transform: scale(0.9);
    }
  }
.dd{
  flex-direction:column;
}
.redHead{
  color:red;
}
 .imgg img{
   width:90%;
   height:50%;
 }
 .symptoms img{
   width:130px;
   height:130px;
   border-radius:65px;
   border:1px inset red;
 }
 .symptoms p{
font-weight:bold;
 }

 .prevent img{
   width:60%;
   height:80%;
   border:1px solid red;
   border-radius:5px;
 }
 .preventImg img{
  width:50px;
   height:50px;
   border-radius:65px;
   border:1px inset red;
 }
 .sub-section{
   background-color:#fff7f7 !important;
 }
 .red{
   color:red;
   display:inline;
   font-weight:bold;
 }
 .row{
   margin:0px !important;
 }
 h2{
   margin-top:20px;
   margin-bottom:15px;
 }
 .outer div{
padding-bottom:10px;
 }
 .last{
   padding:0px !important;
 }
 .fa-solid{
   position:fixed;
   right:5px;
   bottom:5px;
   color:red !important;
   background-color:black;
   padding:5px;
   border-radius:5px;
 }
 th,nav{
   color:red;
   background-color:black;
   font-weight:bold;
 }
</style>
