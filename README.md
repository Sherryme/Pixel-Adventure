# Pixel-Adventure
The Chinese version of BrowserQuest-PHP

![BrowserQuest width workerman](https://github.com/walkor/BrowserQuest-PHP/blob/master/Web/img/screenshot.jpg?raw=true)

## 安装 － Install
> 以 复用`80` 端口为例
1. `git clone https://github.com/Sherryme/Pixel-Adventure`
2. `composer install`
3. 更改配置 `Web/js/config.js` 中的 `ws_url` 为当前服务器 websocket 地址，可以根据自己环境配置采用如下几种格式:
   - 纯地址: `ws://localhost` （默认使用`80`端口）
   - 地址+端口: `ws://localhost:8080`
   - 地址+路径: `ws://localhost/ws` （推荐使用）
   - 地址+端口+路径: `ws://localhost:8080/ws`
   - 安全地址:`wss://localhost` （默认使用`443`端口）
   - 安全地址+端口: `wss://localhost:8080`
   - 安全地址+路径: `wss://localhost/ws` （推荐使用）
   - 安全地址+端口+路径: `wss://localhost:8080/ws`
4. 更改配置 `Server/config.json` 中的 `port` 为 `80` （即使打算使用`wss`也不应为`443`）
5. 更改 `docker-compose.yml` 中的 `services.server.expose` 端口开放情况
6. `docker-compose build`
7. `docker-compose up -d`
8. 将`Ngnix`的网站目录指向`Web`目录
9. 配置`Nginx`反向代理，将 `ws://exsample/ws` 指向 Docker 容器开放的 websocket 服务，如`http://172.17.0.2/`
   ```text
   #PROXY-START/ws
   
   location ^~ /ws
   {
   proxy_pass http://172.17.0.2/;
   proxy_set_header Host $host;
   proxy_set_header X-Real-IP $remote_addr;
   proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
   proxy_set_header REMOTE-HOST $remote_addr;
   }
   
   #PROXY-END/ws
   ```
10. 开放服务器防火墙的`80`端口
11. 访问网站测试是否可以正常进入游戏。

## 说明 - Description
本游戏是由[BrowserQuest](https://github.com/mozilla/BrowserQuest)修改而来，主要是将后端nodejs部分用php（[workerman框架](https://github.com/walkor/workerman)）重写

## 在线演示 - Live Demo
[http://sherry.cf/rpg/](http://sherry.cf/rpg)

## 原Repo - Original Repo
[https://github.com/mozilla/BrowserQuest](https://github.com/mozilla/BrowserQuest)
