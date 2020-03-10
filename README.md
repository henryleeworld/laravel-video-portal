# Laravel 7 影片入口網站

這是一個影片入口網站，提供使用者上傳、搜尋或發現影片，可串流大量的影片內容，它支援行動裝置的存取，並強調安全及簡單易用。Laravel 7 影片入口網站主要是用的 [QuickAdminPanel](https://quickadminpanel.com) 生成的，除了一些定制代碼，可依需求彈性改造的工具。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/login` 來進行登入，預設的電子郵件和密碼分別為 __admin@admin.com__ 和 __password__ 。

----

## 畫面截圖
![](https://i.imgur.com/tQAsSBz.png)
> 進行所有頻道的管理

![](https://i.imgur.com/kBjxE45.png)
> 建立好頻道之後就可以上傳和管理影片

![](https://i.imgur.com/o3tDmxP.png)
> 宣傳你的影片和頻道。盡你所能將頻道連結至多種不同的媒體

![](https://i.imgur.com/OoUVzUW.png)
> 如果你要做的是一個教學影片的話，那麼建議可以先展示最終結果，一個好的結果會更讓人產生興趣