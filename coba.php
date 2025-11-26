<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Stack Animation</title>
<style>
  body {
    margin: 0;
    background: #000;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .stack {
    position: relative;
    width: 350px;
    aspect-ratio: 813 / 1061;
  }

  .layer {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 6px;
    overflow: hidden;
    animation: expand 2.5s cubic-bezier(0.76, 0, 0.24, 1) infinite;
    background: 
      radial-gradient(133% 145% at 0% 100%, #526FFF 0%, rgba(0,0,0,0) 35%),
      radial-gradient(175% 148% at 100% 0%, #526FFF 0%, rgba(0,0,0,0) 30%),
      radial-gradient(105% 133% at 50% 50%, rgba(0,0,0,0) 75%, rgba(82,111,255,0.72) 100%),
      #000;
    background-size: 150% 150%;
    background-position: 0% 100%, 100% 0%, 50% 50%;
    animation-name: expand, gradientMove;
    animation-duration: 2.5s, 8s;
    animation-timing-function: cubic-bezier(0.76, 0, 0.24, 1), linear;
    animation-iteration-count: infinite;
  }

  @keyframes expand {
    0%, 100% { transform: translate(-50%, -50%) scale(0.3); opacity: 0.8; }
    50%    { transform: translate(-50%, -50%) scale(1); opacity: 1; }
  }

  @keyframes gradientMove {
    0% { background-position: 0% 100%, 100% 0%, 50% 50%; }
    50% { background-position: 100% 0%, 0% 100%, 50% 50%; }
    100% { background-position: 0% 100%, 100% 0%, 50% 50%; }
  }
</style>
</head>
<body>

<div class="stack">
  <div class="layer" style="width:100%; animation-delay: 0s;"></div>
  <div class="layer" style="width:85%; animation-delay: .15s;"></div>
  <div class="layer" style="width:70%; animation-delay: .30s;"></div>
  <div class="layer" style="width:55%; animation-delay: .45s;"></div>
  <div class="layer" style="width:35%; animation-delay: .60s;"></div>
  <div class="layer" style="width:15%; animation-delay: .75s;"></div>
</div>

</body>
</html>
