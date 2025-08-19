<?php

/* Template Name: comingsoon */
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROYALBERRY</title>
    <style>
		.spinner {
  position: relative;
  top: 35%;
  width: 80px;
  height: 80px;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 100%;
  animation: sk-scaleout 1s infinite ease-in-out;
}
@keyframes sk-scaleout {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
    opacity: 0;
  }
}
    .loading {
        width: 150px;
        height: 150px;
        background-image: url(https://royalberrycatering.com/wp-content/uploads/2025/02/loading.webp);
        background-repeat: no-repeat;
        background-size: 100%;
        overflow: hidden;
        border-radius: 160px;
    }

    .moving {
        width: auto;
        height: 30px;
        -moz-filter: blur(5px);
        -o-filter: blur(5px);
        -ms-filter: blur(5px);
        filter: blur(5px);
        background-color: var(--white);
        opacity: 0.5;
        animation: move 5s linear infinite;
    }

    /* Keyframe animation for moving the div */
    @keyframes move {
        0% {
            transform: translateY(0);
            /* Start position */
        }

        50% {
            transform: translateY(200px);
            /* Move 200px to the right */
        }

        100% {
            transform: translateY(0);
            /* Return to the start position */
        }
    }
</style>
</head>

<body>


<div style="width:100%; height:100vh; display: flex; justify-content:center; align-items-center; text-align:center; text-align: center;
 background: #fff; align-items: center; flex-direction:column">
    <div class="loading">
        <div class="moving"></div>
    </div>
	<h1 style="margin-top:48px text-align:center; font-size:32px; color:#222; ">
		Great Things Coming Soon.
	</h1>
	<p style="text-align:center; font-size:16px; color:#666; margin: 0;
    font-family: sans-serif;">
		We are a small and growing consulting firm with big ideas.
	</p>
</div>
	</body>

</html>