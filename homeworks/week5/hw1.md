資料表名稱：peiyunchu_comments

| 欄位名稱 | 欄位型態 | 說明 |
|----------|----------|------|
|  id  |    integer      | 主留言 id     |
| username   | varchar | 使用者名稱  |
| created_at   | datetime | 留言建立/更新的時間  |
| parent_id   | integer | 辨認是否為主/子留言的欄位：如果為 0 就是主留言，如果為 id 則為子留言  |


資料庫名稱：peiyunchu_users

| 欄位名稱 | 欄位型態 | 說明 |
|----------|----------|------|
|  id  |    integer      | 主留言 id     |
| nickname   | text | 使用者暱稱  |
| username   | varchar | 使用者名稱  |
| password   | varchar | 密碼  |

資料庫名稱：peiyunchu_certificates

| 欄位名稱 | 欄位型態 | 說明 |
|----------|----------|------|
|  id  |    integer      | 主留言 id     |
| username   | varchar | 使用者名稱  |
| token   | varchar | 防止密碼重置或表單重複提交  |

