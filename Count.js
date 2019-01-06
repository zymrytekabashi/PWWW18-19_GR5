
var self;
self.addEventListener('message', function(e) {
  var data = e.data;
  switch (data.cmd) {
    case 'start':
      self.postMessage('1st Prize: ' + data.msg);
      break;
    case 'stop':
      self.postMessage('3rd& the last Prize: ' + data.msg +
                       'That is all we got for you for today:/.');
      self.close(); // Terminates the worker.
      break;
    default:
      self.postMessage('2nd Prize: ' + data.msg);
  };
}, false);