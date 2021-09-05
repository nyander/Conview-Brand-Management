var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var users = [];


http.listen(8005, function() {
    console.log('Listening to port 8005');
});

io.on('connection', function(socket) {
    socket.on("user_connected", function(user_id) {
        users[user_id] = socket.id;
        io.emit('updateUserStatus', users);
        console.log("user connected " + user_id);
    });

    socket.on('disconnect', function() {
        var i = users.indexOf(socket.id);
        users.splice(i, 1, 0);
        io.emit('updateUserStatus', users);
        console.log(users);
    });
});















// const express = require('express');
// const app = express();
// const http = require('http');
// const server = http.createServer(app);
// const io = require('socket.io')(server);


// // app.get('/', (req, res) => {
// //   res.send('<h1>Hello world</h1>');
// // });


// server.listen(8005, () => {
//     console.log('listening on *:3000');
// });

// io.on('connection', function(socket) {
//     socket.on("user_connected", function(user_id) {
//         console.log("user connected" + user_id);
//     })
// })