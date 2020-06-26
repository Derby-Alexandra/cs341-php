const http = require('http');

function onRequest(req, res) {
    switch (req.url) {
        case '/home':
            res.writeHead(200,{'Content-Type': 'text/html'})
            res.write("<h1>Welcome to the Home Page</h1>")
            break
        case '/getData':
            res.writeHead(200,{'Content-Type': 'application/json'})
            const student = { 
                "name": "Alexandra Derby",
                "class": "CS341"
            }
            const json = JSON.stringify(student)
            res.write(json)
            break
        default:
            res.writeHead(404,{'Content-Type': 'text/html'})
            res.write("Page not found")
    }
}

http.createServer(onRequest).listen(8080);
