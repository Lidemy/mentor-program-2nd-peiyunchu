1. 什麼是 DOM？
DOM(Document Object Model) :「文件物件模型」的縮寫，是 HTML 和 XML 的介面，由瀏覽器所提供。DOM 會把 HTML 的標籤或元素都看成一個個節點 (Node)，讓程式語言 (主流為 Javascript) 來操縱 HTML的結構、樣式和內容。

2. 什麼是 Ajax？
Asynchronous JavaScript and XML ( 非同步的 JavaScript 與 XML )
是一種網頁不需要更新頁面，就能伺服器進行資料交換的技術。Ajax 會透過瀏覽器提供的 API(Application Program Interface 應用程式介面 : 是可以存取、交換資料的地方)，讓網頁可以不必等待 response 回傳，就能同時繼續執行後續的程式碼。等到有了 response 回來，再來處理這個程序就好了。它是怎麼辦到的 ? 是利用 callback function，把需要等到 API 資料才能執行的東西先放在這個回呼函式裡 ， 繼續執行後面的程式碼，等 API 資料回來以後再執行 callback function。就像是去百貨公司美食街，點餐後店員會給你一個震動器 (callback function)，你不用在那邊傻等可以先去找位置，坐下來滑手機或是跟朋友聊天 (執行後面的程式碼)，等到震動了再去取餐 (回傳的 API 資料)。
另外，如何使用 Ajax 技術發送 Request？ 是透過 XMLHttpRequest 物件，向伺服器發送 request 達成。

3. HTTP method 有哪幾個？有什麼不一樣？
GET：從伺服器端取得資料。

HEAD：與 GET 相同，但沒有 response body。「只會取得 HTTP header的資料」。

POST：是從客戶端送資料到伺服器端。(例如 : 登入 )

PUT：把整個資料都換成新的。

PATCH：和 PUT 不同，PATCH 是增加或「部分更新」一筆新的資料。(是點餐的時候「加點」的概念)

DELETE：刪除指定資料。

OPTIONS：描述指定資源的 methods。也就是傳回允許的 methods。「只會取得 HTTP header的資料」。


4. GET 跟 POST 有哪些區別，可以試著舉幾個例子嗎？
GET
參數帶在 URL 上作為 QueryString 的一部分。 假如我透過 google 搜尋關鍵字 veterinary，它網址列上關鍵字會以公開方式顯示，因此安全性需要保密性資料 ( 例如密碼 ) 不適合以 GET 方式傳送。資料的長度有限制。
POST
帶參數的位置：POST 把資料放在 request body 裡面。安全性較高，傳送給伺服器的資料內容不會在網址上公開顯示，因此較具隱密性，需要保密性高的資料較適合使用此方式。資料長度沒有限制，允許大量傳輸。

5. 什麼是 RESTful API？
REST 全名 Representational State Transfer ，是一種以清晰明確語意來描述 Web 操作的設計風格。而實踐 REST 風格被實作出來的 API，就稱為 RESTful API。以 HTTP 協定做為基礎，讓 API 規格簡單一致。
RESTful API 的特色就是:
## 使用 URI 來定位資源
## 用 HTTP 動詞（ GET、POST、PUT 和 DELETE ）來描述對資源的操作。這樣做的好處就是資源和介面分離，只需要一個接口再搭配相對應的 HTTP method 就可以完成。


6. JSON 是什麼？
JSON (JavaScript Object Notation) 是一種資料格式。以易於閱讀的純文字為基礎，用來傳輸資料物件，常用在撰寫 API 裡面的交換資料(Ajax 原本資料交換是透過 XML，後來因為 JSON 的輕便性，逐漸受到重視，成為 Ajax 最主要的資料交換格式。)，做為前、後端的溝通工具。

7. JSONP 是什麼？
JSONP (JSON with Padding) 利用 <script> 可以跨網域的特性，在 HTML 裡引入 API URL 到 <script> 裡，然後定義 callback function 的參數，在 JavaScript 檔案裡用 callback function 呼叫出 JSONP 的資料。但只能用 GET method。

8. 要如何存取跨網域的 API？
有兩種方式：

##JSONP：如上述。 缺點：只能使用 GET method，參數必須帶在網址上。

##CORS 跨來源資源共享 (cross-origin resource sharing)：
是一份瀏覽器技術的規範，透過添加額外的 HTTP header 使網站取得存取其他網域伺服器特定資源的權限，以AJAX的方式存取跨網域的API。當請求不同網域的資源時，會建立一個跨來源 HTTP 請求（cross-origin HTTP request）。所以想跨網域存取的話，Server 必須在 Response 的 Header 裡面加上Access-Control-Allow-Origin。當瀏覽器收到 Response 後，若檢查到裡面有包含發起 Request 的 Origin 的話，就會允許通過，讓程式順利接收到 Response。