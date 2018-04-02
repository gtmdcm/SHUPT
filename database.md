1. 用户(users）

   | 字段名   | 类型      | 长度 | 备注          |
   | -------- | --------- | ---- | ------------- |
   | id       | increment |      | 表自增id      |
   | uid      | char      | 8    | 用户id        |
   | name     | varchar   | 20   | 用户名        |
   | email    | varchar   | 50   | 邮箱          |
   | password | varchar   | ??   | 密码 hash加密 |

2. 用户属性(profiles)

   | 字段名        | 类型             | 长度 | 备注       |
   | ------------- | ---------------- | ---- | ---------- |
   | id            | increment        |      | 表自增id   |
   | uid           | char             | 8    | 用户id     |
   | up            | double           | 8    | 上传量     |
   | down          | double           | 8    | 下载量     |
   | contribute    | double           | 8    | 贡献度     |
   | rank          | integer          | 8    | 排名       |
   | register_date | datetime         |      | 注册日期   |
   | last_login    | datetime         |      | 上次登陆   |
   | last_upload   | datetime         |      | 上一次上传 |
   | last_download | datetime         |      | 上一次下载 |
   | banned        | enum('yes','no') | 1    | 是否被封禁 |
   | character     | char             | 4    | 用户角色   |

3. 用户档案(documents)

   | 字段名    | 类型                  | 长度 | 备注     |
   | --------- | --------------------- | ---- | -------- |
   | id        | increment             |      | 表自增id |
   | uid       | char                  | 8    | 用户id   |
   | figure    | char                  | 16   | 头像     |
   | gender    | enum('male','female') | 2    | 性别     |
   | school    | char                  | 4    | 学校     |
   | signature | varchar               | 100  | 个人签名 |

4. 资源(resources)

   | 字段名        | 类型             | 长度 | 备注                     |
   | ------------- | ---------------- | ---- | ------------------------ |
   | id            | increment        |      | 表自增id                 |
   | rid           | char             | 10   | 资源id                   |
   | name          | varchar          | 40   | 资源名                   |
   | seed          | char             | 16   | 种子名                   |
   | visible       | enum('yes','no') | 1    | 是否可见                 |
   | banned        | enum('yes','no') | 1    | 是否被封                 |
   | down50        | enum('yes','no') | 1    | 是否50%下载量            |
   | down30        | enum('yes','no') | 1    | 是否30%下载量            |
   | downfree      | enum('yes','no') | 1    | 是否不计下载量           |
   | up200         | enum('yes','no') | 1    | 是否200%上传量           |
   | up200down50   | enum('yes','no') | 1    | 是否200%上传量50%下载量  |
   | up200downfree | enum('yes','no') | 1    | 是否200%上传量不计下载量 |
   | owner         | varchar          | 20   | 资源拥有者               |
   | catagory      | char             | 4    | 分类                     |
   | stadard       | char             | 4    | 清晰度                   |
   | last_action   | datetime         |      | 上一次被下载             |
   | upload_time   | datetime         |      | 资源上传时间             |

5. 权限(auths)

   | 字段名      | 类型      | 长度 | 备注     |
   | ----------- | --------- | ---- | -------- |
   | id          | increment |      | 表自增id |
   | aid         | char      | 4    | 权限id   |
   | auth        | varchar   | 20   | 权限     |
   | description | varchar   | 50   | 权限描述 |

6. 角色(characters)

   | 字段名      | 类型      | 长度 | 备注     |
   | ----------- | --------- | ---- | -------- |
   | id          | increment |      | 表自增id |
   | cid         | char      | 4    | 角色id   |
   | character   | varchar   | 15   | 角色     |
   | description | varchar   | 50   | 角色描述 |

7. 日志(logs)

   | 字段名    | 类型      | 长度 | 备注     |
   | --------- | --------- | ---- | -------- |
   | id        | increment |      | 表自增id |
   | operation | varchar   | 20   | 操作     |
   | operator  | varchar   | 20   | 操作者   |
   | date      | datetime  |      | 操作日期 |

8. 角色权限(charauth)

   | 字段名 | 类型      | 长度 | 备注     |
   | ------ | --------- | ---- | -------- |
   | id     | increment |      | 表自增id |
   | cid    | char      | 4    | 角色id   |
   | aid    | char      | 4    | 权限id   |

10. 学校(schools)

   | 字段名   | 类型      | 长度 | 备注     |
   | -------- | --------- | ---- | -------- |
   | id       | increment |      | 表自增id |
   | schoolid | char      | 4    | 学校id   |
   | name     | varchar   | 30   | 学校名   |

10. 资源种类(catagory)

   | 字段名   | 类型      | 长度 | 备注       |
   | -------- | --------- | ---- | ---------- |
   | id       | increment |      | 表自增id   |
   | cataid   | char      | 4    | 资源种类id |
   | name     | varchar   | 20   | 资源种类名 |
   | parentid | char      | 4    | 父种类id   |

12. 清晰度(standard)

    | 字段名     | 类型      | 长度 | 备注       |
    | ---------- | --------- | ---- | ---------- |
    | id         | increment |      | 表自增id   |
    | standardid | char      | 4    | 清晰度id   |
    | name       | varchar   | 20   | 清晰度名称 |

    ​