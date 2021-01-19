# 履歷規劃
## 作品集計畫
### 後端(PHP)作品
* 修改乙級題目(電影訂票)為個人作品
* 發票兌獎
* 線上萬年曆
### 前端作品
* JS小作業(sweet alert選擇故事)
* JS小作業(選色器)
## 前台視覺設計
* 主色調設計
![Imgur](https://i.imgur.com/tWmHTEf.png)
* lg時顯示AI插畫作為banner,平板/手機尺寸用javascript做出打字動畫
## 資料庫設計
>共有四個區塊(About Me/Skill/Profilio/Contact Me)各自使用一張資料表
### 資料表:
#### 資料表名:img
##### 欄位:
* img:(大頭貼照片路徑)
* sh:顯示與否(只會有一個顯示)
#### 資料表名:about
##### 欄位:
* txt:(簡易自我介紹文字)
* sh:顯示與否(只會有一個顯示)
#### 資料表名:exp
##### 欄位:
* title:(經歷名稱)
* timetxt:(經歷時間 ex:2019/1~2020/4)
* txt:(經歷說明)
* order:(顯示順序)
* sh:顯示與否(多個顯示)
#### 資料表名:skill_class
##### 欄位:
* class:(技能分類)
* order:(顯示順序)
#### 資料表名:skill
##### 欄位:
* skill:(技能分類)
* parent:(所屬分類)
* order:(顯示順序)
#### 資料表名:port
##### 欄位:
* title:(作品標題)
* txt:(作品說明)
* type:(作品分類)
* link:(作品連結)
* img:(作品縮圖)
* sh:顯示與否(多個顯示)


