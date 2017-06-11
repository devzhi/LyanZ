# LyanZ
LyanZ,A Typecho Theme

*This is a sad story.*

## 简介

![https://github.com/hiyelang/LyanZ/raw/master/screenshot.png](https://github.com/hiyelang/LyanZ/raw/master/screenshot.png)



[DEMO](https://www.sstype.com/)

[LyanZ主题背后的那些事](https://www.sstype.com/read/356.html)

## 安装&使用

### 安装

[**下载**](https://github.com/hiyelang/LyanZ/releases)最新稳定版并上传至`usr/themes`后台启用

### 使用

#### 友情链接

*友情链接位于左侧边栏Links下，默认启用*

##### 启用&禁用

编辑`sidebar.php`第9行`<?php $this->need('links.php'); ?>`为`<?php #$this->need('links.php'); ?>`或删除即可禁用友情链接

##### 修改&添加

编辑`links.php`第5行提供的即可修改友情链接，添加请直接复制第5行

#### 统计代码

将统计代码添加到`footer.php`第9行即可。

#### 社交按钮

编辑`footer.php`第`3-5`行的`#`为相应链接，三行分别对应*Github*，*Weibo*，*Email*，不需要可以直接删除掉此行。

## 更新

### 更新方向

- [x] 社交账号按钮
- [ ] 原生Google Analytics
- [x] 搜索框
- [ ] 后台设置

### 更新记录

#### 2017年6月11日

- 增加底部社交按钮
- 增加搜索框

#### 2017年6月10日 Version 1.0

- 添加Font-Awesome图标
- 优化标签（tag）样式
- 优化评论样式
- 优化分页样式

#### 2017年6月8日 Version 0.1.3

- 增加侧边栏开关按钮
- fix some bugs

## 致谢 & 捐赠

**致谢以下项目**

- [W3.css](https://www.w3schools.com/w3css/default.asp)
- [Vue.js](https://github.com/vuejs/vue)
- [Font-Awesome](https://github.com/FortAwesome/Font-Awesome)

**捐赠我**

![https://github.com/hiyelang/LyanZ/raw/master/pay.png](https://github.com/hiyelang/LyanZ/raw/master/pay.png)

## LICENSE

   Copyright 2017 hiyelang of copyright owner

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.