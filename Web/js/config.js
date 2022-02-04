define(function() {
    var config = {
        ws_url: "ws://localhost/Pixel-Adventure/ws",
        dispatcher: false  // 开启则由入口服务器牵引至真实服务器地址，可实现负载均衡
    };
    return config;
});