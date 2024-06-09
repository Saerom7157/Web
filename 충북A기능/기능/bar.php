<style type="text/css">
  .progress-bar-container {
    width: 100%;
    height: 20px;
    background-color: #f0f0f0;
    border-radius: 10px;
    overflow: hidden;
  }
  
  .progress-bar {
    width: 0;
    height: 100%;
    background-color: #4CAF50;
    animation: progress 3s linear infinite;
  }
  
  @keyframes progress {
    0% {
      width: 0;
    }
    100% {
      width: 100%;
    }
  }
</style>

<div class="progress-bar-container">
  <div class="progress-bar"></div>
</div>