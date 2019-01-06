 var worker;
  function sayHI() {
    worker.postMessage({'cmd': 'start', 'msg': 'Make a photo journal!'});
  }

  function stop() {
    // worker.terminate() from this script would also stop the worker.
    worker.postMessage({'cmd': 'stop', 'msg': 'Visit the beach!'});
  }

  function unknownCmd() {
    worker.postMessage({'cmd': 'foobard', 'msg': 'Visit a farmers market'});
  }

  var worker = new Worker('Count.js');

  worker.addEventListener('message', function(e) {
    document.getElementById('result').textContent = e.data;
  }, false);
