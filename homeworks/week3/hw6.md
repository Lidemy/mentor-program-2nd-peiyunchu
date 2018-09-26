## 請找出三個課程裡面沒提到的 HTML 標籤並一一說明作用。
1. <og> : 如果有使用這個標籤 , FB就會根據標題描述或是縮圖 , 取得相關資訊 .
最常的使用方式如下:
<meta property="og:title" content="網頁標題">
<meta name="og:description" content="網頁描述">
2. <image>:用來定義圖片
使用格式:
<img src="圖片的連結" alt="圖片名稱(萬一無法連結也可藉由此得知網站在幹嘛)">
3. <Refresh>:用來設定網頁自動更新的時間
舉個例子:
假如我希望每 5 秒更新一次網頁
只要打上:
<meta http-equiv="Refresh" content="5">



## 請問什麼是盒模型（box modal）
在 HTML 裡的每個元素 , 都可以把它看成是一個盒子 , 可以用 CSS 來調整盒子的屬性.
盒模型由盒內到盒外包括 : width / height / padding / border / margin
其中需要注意的是 , width 和 height 指的是"內容"( 盒子內 ) 的寬和高 . 如果想要
符合自己的需求 , 可善用 box-sizing 來調整 . 例如 border-box 可以用來設定元素的
padding 和 border 而不會增加元素本身的寬度 . 


## 請問 display: inline, block 跟 inline-block 的差別是什麼？
1. inline: 無法調整寬高和上下邊距 , 會根據內文來顯示 .可以與其他元素並排 . 
2. block: 會自己占據一整行 , 無法與其他元素並排 , 可以設定寬度與高度 . 
3. inline-block:跟inline一樣可以與其他元素並排 , 也跟 block 一樣可以設定寬度與高度

## 請問 position: static, relative, absolute 跟 fixed 的差別是什麼？
static : 是 HTML 裡的預設值 , 用最自然的方式 , 由上至下 , 由左至右來排版.
relative : 可以用 top, left, right, bottom 的屬性來偏移原本的常規位置 , 不會影響其他元素的位置 . 
absolute : 它的起始點是是找曾經設定過 position 的祖先 , 一層層往上找 , 找到之後就會以對方
為準去調整位置 . 找不到的話 , 最後就會以 body 當作起始點 , 也就是網頁的左上角 , 來計算位置 . 