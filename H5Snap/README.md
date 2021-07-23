# H5打开链接立即抓拍上传并跳转至其他链接的程序

## 简介

该项目可通过`sc.php`生成一个带有唯一识别ID和跳转URL的链接，访问该链接后，会调用浏览器前置相机并抓拍上传至服务器`./img/`目录下（动作极快），上传完毕后将跳转至附带参数的URL。可通过`ck.php`附带id查询被上传的照片。

## 使用方式

1. 访问`sc.php`，填写ID、URL。

2. 访问生成的链接（类似`https://localhost/index.php?id=123&url=https://baidu.com/`）。

3. 自动调用前置摄像头抓拍图片并上传至`qbl.php`，以ID开头命名。
4. 上传完成后跳转至指定url。

## 各页面参数

### `sc.php`

| 参数名 | 举例                | 说明                                          | 请求类型 |
| ------ | ------------------- | --------------------------------------------- | -------- |
| id     | `123`               | 唯一识别id，建议输入复杂以免与其他人混淆      | GET      |
| url    | `https://baidu.com` | 上传后的跳转URL，带http/https协议头的链接地址 | GET      |

### `qbl.php`

| 参数名 | 举例                  | 说明                                          | 请求类型 |
| ------ | --------------------- | --------------------------------------------- | -------- |
| img    | （base64）123_img.jpg | 以base64编码的被抓拍图片                      | POST     |
| id     | `123`                 | 唯一识别id，建议输入复杂以免与其他人混淆      | GET      |
| url    | `https://baidu.com`   | 上传后的跳转URL，带http/https协议头的链接地址 | GET      |

## `ck.php`

| 参数名 | 举例          | 说明                                           | 请求类型 |
| ------ | ------------- | ---------------------------------------------- | -------- |
| type   | null/del/dell | 分别为不做操作/删除确认？/确认删除该ID下的图片 | GET      |
| page   | 0             | 第几页，默认3张图片一页                        | GET      |
| id     | `123`         | 唯一识别id，建议输入复杂以免与其他人混淆       | GET      |
