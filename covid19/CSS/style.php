
.nav-link, .navbar-brand
{
    color:red !important;
    font-weight: bold;
    font-size: larger;
}
#virusImg
{
    width: 40px !important;
    height: 40px !important;
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
      transform: scale(.3);
    }
    100% {
      transform: scale(1.5);
    }
  }
