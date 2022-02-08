<style type="text/css">
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
</style>
