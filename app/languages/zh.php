<?php

/**
 * Localization Serivce for Chinese.
 * @var array
 */
$messages = array(
    # layouts/layout.phtml
    'layout.home'                                       => '首页',
    'layout.products'                                   => '产品列表',
    'layout.contests'                                   => '竞赛',
    'layout.sign-in'                                    => '登录',
    'layout.sign-in-as'                                 => '已作为 %username% 登录',
    'layout.dashboard'                                  => '控制板',
    'layout.profile'                                    => '个人资料',
    'layout.sign-out'                                   => '退出登录',
    'layout.terms-and-privacy'                          => '条款和隐私',
    'layout.terms'                                      => '使用条款',
    'layout.privacy'                                    => '隐私和Cookie',
    'layout.internationalization'                       => '更换语言',
    'layout.contact-us'                                 => '联系我们',
    'layout.stay-connected'                             => '关注我们',
    'layout.copyright'                                  => '版权所有',
    'layout.all-rights-reserved'                        => '保留所有权利',
    'layout.unknown-error'                              => '发生了未知错误.',
    # default/index.phtml
    'default.index.title'                               => '首页',
    'default.index.slogan'                              => '更好地一起<br>构建、测试软件.',
    'default.index.username'                            => '用户名',
    'default.index.email'                               => '电子邮件地址',
    'default.index.password'                            => '密码',
    'default.index.sign-up'                             => '创建账户',
    'default.index.agreen-terms'                        => '单击"创建账户", 表示同意<a href="%termsUrl%">服务条款</a>和<a href="%privacyUrl%">隐私条款</a>.',
    'default.index.partner-of-netease'                  => '网易云课堂合作伙伴',
    'default.index.software-testing-technology'         => '朱少民 - 软件测试方法和技术实践',
    'default.index.learn-more'                          => '了解更多',
    'default.index.new-version-of-testzilla'            => '新的 TestZilla 已经发布!',
    'default.index.better-experience'                   => '改变, 只为了更好的用户体验',
    'default.index.change-log'                          => '更新日志',
    'default.index.what-is-testzilla'                   => 'TestZilla是什么?',
    'default.index.best-tool'                           => '最佳的测试工具',
    'default.index.voice-from-users'                    => '来自用户的声音',
    'default.index.easier-testing'                      => '测试从未变得如此简单',
    # accounts/signIn.phtml
    'accounts.signin.title'                             => '登录',
    'accounts.signin.sign-in'                           => '登录',
    'accounts.signin.incorrect-password'                => '用户名或密码不正确.',
    'accounts.signin.sign-out'                          => '您已退出登录.',
    'accounts.signin.username'                          => '用户名或电子邮件地址',
    'accounts.signin.password'                          => '密码',
    'accounts.signin.forgot-password'                   => '忘记密码?',
    'accounts.signin.remember-me'                       => '保持登录状态',
    'accounts.signin.dont-have-account'                 => '没有账户?',
    'accounts.signin.create-account'                    => '创建账户',
    'accounts.signin.please-wait'                       => '请稍后...',
    # accounts/signUp.phtml
    'accounts.signup.title'                             => '注册',
    'accounts.signup.sign-up'                           => '注册',
    'accounts.signup.username'                          => '用户名',
    'accounts.signup.email'                             => '电子邮件地址',
    'accounts.signup.password'                          => '密码',
    'accounts.signup.already-have-account'              => '已经拥有账户?',
    'accounts.signup.sign-in'                           => '登录',
    'accounts.signup.please-wait'                       => '请稍后...',
    'accounts.signup.invalid-token'                     => '无效的Token.',
    'accounts.signup.username-empty'                    => '请填写用户名.',
    'accounts.signup.username-length-illegal'           => '用户名的长度必须在6-16个字符之间.',
    'accounts.signup.username-beginning-illegal'        => '用户名的第一个字符必须是字母(a-z).',
    'accounts.signup.username-character-illegal'        => '用户名只能包含字母(a-z), 数字, 和下划线(_).',
    'accounts.signup.username-taken'                    => '用户名已被他人使用.',
    'accounts.signup.email-empty'                       => '请填写电子邮件地址.',
    'accounts.signup-email-illegal'                     => '电子邮件地址似乎是无效的.',
    'accounts.signup.email-taken'                       => '电子邮件地址已被他人使用.',
    'accounts.signup.password-empty'                    => '请填写密码.',
    'accounts.signup.password-illegal'                  => '密码的长度必须在6-16个字符之间',
    # accounts/user.phtml
    'accounts.user.joined-on'                           => '注册于',
    'accounts.user.products'                            => '产品',
    'accounts.user.issues'                              => '问题',
    'accounts.user.about-me'                            => '关于我',
    'accounts.user.issue-name'                          => '问题名称',
    'accounts.user.issue-category'                      => '问题分类',
    'accounts.user.issue-status'                        => '问题状态',
    'accounts.user.more-issues'                         => '加载更多问题...',
    'accounts.user.no-issues'                           => '暂无该用户提交的问题.',
    # accounts/verify-email.phtml
    'accounts.verify-email.title'                       => '验证电子邮件地址验证',
    'accounts.verify-email.email-verified'              => '您的电子邮件地址已验证.',
    'accounts.verify-email.invalid-token'               => 'Token似乎是无效的.',
    # accounts/reset-password.phtml
    'accounts.reset-password.title'                     => '重置密码',
    'accounts.reset-password.reset-password'            => '重置密码',
    'accounts.reset-password.new-password'              => '新密码',
    'accounts.reset-password.confirm-new-password'      => '确认新密码',
    'accounts.reset-password.username'                  => '用户名',
    'accounts.reset-password.email'                     => '电子邮件地址',
    'accounts.reset-password.send-verification-email'   => '发送验证邮件',
    'accounts.reset-password.please-wait'               => '请稍后...',
    'accounts.reset-password.password-resetted'         => '您的密码已被重置.',
    'accounts.reset-password.invalid-email-token'       => '重置密码的Token似乎是无效的.',
    'accounts.reset-password.new-password-empty'        => '请填写新密码.',
    'accounts.reset-password.new-password-illegal'      => '新密码的长度必须在6-16个字符之间.',
    'accounts.reset-password.new-password-not-matched'  => '新密码和确认密码不匹配.',
    'accounts.reset-password.mail-sent'                 => '一封包含密码重置说明的邮件已经发送至您的邮箱.',
    'accounts.reset-password.invalid-csrf-token'        => '无效的Token.',
    'accounts.reset-password.user-not-exists'           => '用户名或电子邮件地址不正确.',
    # dashboard/sidebar
    'dashboard.sidebar.dashboard'                       => '控制板',
    'dashboard.sidebar.profile'                         => '个人资料',
    'dashboard.sidebar.my-products'                     => '我的产品',
    'dashboard.sidebar.my-issues'                       => '我的问题',
    'dashboard.sidebar-received-issues'                 => '收到的问题',
    'dashboard.sidebar-submitted-issues'                => '提出的问题',
    # dashboard/index.phtml
    'dashboard.index.title'                             => '控制板',
    # dashboard/profile.phtml
    'dashboard.profile.title'                           => '个人资料',
    'dashboard.profile.change-password'                 => '修改密码',
    'dashboard.profile.password-changed'                => '您的密码已修改.',
    'dashboard.profile.old-password'                    => '旧密码',
    'dashboard.profile.new-password'                    => '新密码',
    'dashboard.profile.confirm-new-password'            => '确认新密码',
    'dashboard.profile.profile'                         => '个人资料',
    'dashboard.profile.preview'                         => '预览',
    'dashboard.profile.profile-changed'                 => '您的个人资料已修改.',
    'dashboard.profile.email'                           => '电子邮件地址',
    'dashboard.profile.location'                        => '所在城市',
    'dashboard.profile.location-example'                => '上海, 中国',
    'dashboard.profile.website'                         => '个人主页',
    'dashboard.profile.social-links'                    => '社交网络',
    'dashboard.profile.new-social-link'                 => '添加社交网络信息',
    'dashboard.profile.no-social-links'                 => '暂无社交网络信息.',
    'dashboard.profile.about-me'                        => '关于我',
    'dashboard.profile.introduce-yourself'              => '写些内容介绍自己.',
    'dashboard.profile.update-profile'                  => '更新个人资料',
    'dashboard.profile.please-wait'                     => '请稍后...',
    'dashboard.profile.old-password-incorrect'          => '旧密码不正确.',
    'dashboard.profile.new-password-empty'              => '请填写新密码.',
    'dashboard.profile.new-password-illegal'            => '新密码的长度必须在6-16个字符之间.',
    'dashboard.profile.new-password-not-matched'        => '新密码和确认密码不匹配.',
    'dashboard.profile.service-name'                    => '服务名称',
    'dashboard.profile.email-empty'                     => '请填写电子邮件地址.',
    'dashboard.profile.email-illegal'                   => '电子邮件地址似乎是无效的.',
    'dashboard.profile.email-existing'                  => '电子邮件地址已被他人使用.',
    'dashboard.profile.location-illegal'                => '所在城市的长度不得超过128个字符.',
    'dashboard.profile.website-legal'                   => '个人主页的地址似乎是无效的.',
    'dashboard.profile.about-me-legal'                  => '关于我的描述不得超过256个字符.',
    # dashboard/products.phtml
    'dashboard.products.title'                          => '我的产品',
    'dashboard.products.my-products'                    => '我的产品',
    'dashboard.products.new-product'                    => '创建产品',
    'dashboard.products.no-products'                    => '暂无可用产品.',
    'dashboard.products.issues-reported'                => '个已报告问题',
    'dashboard.products.product-name'                   => '产品名称',
    'dashboard.products.product-category'               => '产品分类',
    'dashboard.products.product-logo-url'               => '产品Logo的URL',
    'dashboard.products.latest-version'                 => '最新版本',
    'dashboard.products.product-url'                    => '产品链接',
    'dashboard.products.product-prerequisite'           => '先决条件',
    'dashboard.products.product-description'            => '产品描述',
    'dashboard.products.introduce-product'              => '介绍你的产品.',
    'dashboard.products.edit'                           => '编辑',
    'dashboard.products.edit-product'                   => '编辑产品',
    'dashboard.products.close'                          => '关闭',
    'dashboard.products.save-changes'                   => '保存更改',
    'dashboard.products.product-not-found'              => '未找到相关产品!',
    'dashboard.products.saving'                         => '正在保存...',
    'dashboard.products.invalid-token'                  => '无效的 Token.',
    'dashboard.products.product-not-exists'             => '产品不存在.',
    'dashboard.products.invalid-developer'              => '您没有创建产品的权限.',
    'dashboard.products.product-name-empty'             => '请填写产品名称.',
    'dashboard.products.product-name-illegal'           => '产品名称的长度不得超过64个字符.',
    'dashboard.products.product-category-illegal'       => '产品分类似乎是无效的.',
    'dashboard.products.product-logo-empty'             => '请填写产品Logo的地址.',
    'dashboard.products.product-logo-illegal'           => '产品Logo的地址似乎是无效的.',
    'dashboard.products.product-version-empty'          => '请填写产品的最新版本.',
    'dashboard.products.product-version-illegal'        => '产品最新版本的长度不得超过24个字符.',
    'dashboard.products.product-url-empty'              => '请填写产品链接.',
    'dashboard.products.product-url-illegal'            => '产品链接似乎是无效的.',
    'dashboard.products.product-prerequisites-empty'    => '请填写测试的先决条件.',
    'dashboard.products.product-prerequisites-illegal'  => '先决条件的长度不得超过256个字符.',
    'dashboard.products.product-description-empty'      => '请填写产品描述.',
    'dashboard.products.product-description-illegal'    => '产品描述的长度不得超过1024个字符.',
    # dashboard/receivedIssues.phtml + submittedIssues.phtml
    'dashboard.issues.quick-search'                     => '快速搜索',
    'dashboard.issues.filter'                           => '筛选',
    'dashboard.issues.product-name'                     => '产品名称',
    'dashboard.issues.issue-category'                   => '问题分类',
    'dashboard.issues.issue-status'                     => '问题状态',
    # dashboard/receivedIssues.phtml
    'dashboard.received-issues.title'                   => '收到的问题',
    # dashboard/submittedIssues.phtml
    'dashboard.submitted-issues.title'                  => '提出的问题',
    'dashboard.submitted-issues.no-issues'              => '暂无提出的问题.',
    # products/index.phtml
    'products.index.title'                              => '产品列表',
    'products.index.search'                             => '搜索产品',
    'products.index.keyword'                            => '关键词',
    'products.index.categories'                         => '产品分类',
    'products.index.all-categories'                     => '全部分类',
    'products.index.no-products'                        => '暂无可用产品.',
    'products.index.issues-reported'                    => '个已报告问题',
    # products/product.phtml
    'products.product.product-information'              => '产品信息',
    'products.product.introduction'                     => '产品概述',
    'products.product.product-name'                     => '产品名称',
    'products.product.product-category'                 => '产品分类',
    'products.product.latest-version'                   => '最新版本',
    'products.product.product-url'                      => '产品链接',
    'products.product.prerequisites'                    => '先决条件',
    'products.product.description'                      => '详细信息',
    'products.product.issues'                           => '提交的问题',
    'products.product.new-issue'                        => '新问题',
    'products.product.quick-search'                     => '快速搜索',
    'products.product.filter'                           => '筛选',
    'products.product.issue-category'                   => '问题分类',
    'products.product.issue-status'                     => '问题状态',
    'products.product.filter-username'                  => '用户名',
    'products.product.no-issues'                        => '暂无问题.',
    'products.product.user'                             => '用户',
    'products.product.developer'                        => '开发者',
    'products.product.relational-products'              => '相关产品',
    'products.product.no-relational-products'           => '暂无相关产品.',
    # products/issue.phtml
    'products.issue.new-issue'                          => '新问题',
    'product.issue.comments'                            => '条评论',
    'products.issue.commented-on'                       => '评论于',
    'products.issue.load-more'                          => '加载更多...',
    'products.issue.leave-a-comment'                    => '发表评论',
    'products.issue.comment'                            => '评论',
    'products.issue.please-wait'                        => '请稍后...',
    'products.issue.invalid-token'                      => '无效的Token.',
    'products.issue.user-not-logged-in'                 => '请登录后发表回复.',
    'products.issue.issue-not-exists'                   => '回复所对应的问题不存在.',
    'products.issue.empty-content'                      => '请填写回复内容.',
    'products.issue.issue-category'                     => '问题分类',
    'products.issue.issue-status'                       => '问题状态',
    'products.issue.product-name'                       => '产品名称',
    'products.issue.milestone'                          => '产品版本',
    'products.issue.latest-version'                     => '最新版本:',
    # products/new-issue.phtml
    'products.new-issue.title'                          => '新问题',
    'products.new-issue.new-issue'                      => '新问题',
    'products.new-issue.product-name'                   => '产品名称:',
    'products.new-issue.latest-version'                 => '最新版本:',
    'products.new-issue.create-issue'                   => '创建问题',
    'products.new-issue.issue-title'                    => '标题',
    'products.new-issue.issue-category'                 => '问题分类',
    'products.new-issue.product-version'                => '产品版本',
    'products.new-issue.description'                    => '请描述问题和复现的步骤',
    'products.new-issue.please-wait'                    => '请稍后...',
    'products.new-issue.invalid-token'                  => '无效的Token.',
    'products.new-issue.user-not-logged-in'             => '请登录后提交问题.',
    'products.new-issue.product-not-exists'             => '问题所对应的产品不存在.',
    'products.new-issue.issue-title-empty'              => '请填写标题.',
    'products.new-issue.issue-title-invalid'            => '标题的长度不得超过64个字符.',
    'products.new-issue.issue-category-empty'           => '请dashboard.products.invalid-token选择问题分类.',
    'products.new-issue.product-version-empty'          => '请填写产品版本.',
    'products.new-issue.product-version-illegal'        => '产品版本的长度不得超过24个字符.',
    'products.new-issue.issue-description-empty'        => '请填写问题描述.',
    # errors/resourceNotFound.phtml
    'errors.404.title'                                  => '页面未找到',
    'errors.404.page-not-found'                         => '页面未找到!',
    'errors.404.message'                                => '无法在服务器上定位所请求的URL.',
    'errors.404.go-back'                                => '返回',
    # errors/internelServerError.phtml
    'errors.500.title'                                  => '内部服务器错误',
    'errors.500.internal-server-error'                  => '发生了内部服务器错误!',
    'errors.500.message'                                => '所请求的URL造成了内部服务器错误.',
    'errors.500.go-back'                                => '返回',
    # errors/notSupportedError.phtml
    'errors.not-supported.title'                        => '浏览器不受支持',
    'errors.not-supported.browser-not-supported'        => '浏览器不受支持.',
    'errors.not-supported.message'                      => '%WebsiteName% 不再支持您的浏览器. 请升级您的浏览器. <a href="%URL%">了解更多</a>.',
    'errors.not-supported.download'                     => '下载',
    # defaults/terms.phtml
    'default.terms.title'                               => '使用条款',
    'default.terms.terms'                               => '使用条款',
    'default.terms.introdction-content'                 => '感谢您使用我们的产品和服务. 服务由%websiteName%提供. \n\n您使用我们的服务即表示您已同意本条款. 请仔细阅读. \n\n我们的服务范围非常广泛, 因此有时还会适用一些附加条款或产品要求(包括年龄要求). 附加条款将会与相关服务一同提供, 并且在您使用这些服务后, 成为您与我们所达成的协议的一部分. ',
    'default.terms.using-services'                      => '使用服务',
    'default.terms.using-services-content'              => '您必须遵守服务中提供的所有政策.\n\n请勿滥用我们的服务. 举例而言, 请勿干扰我们的服务或尝试使用除我们提供的界面和指示以外的方法访问这些服务. 您仅能在法律(包括适用的出口和再出口管制法律和法规)允许的范围内使用我们的服务. 如果您不遵守我们的条款或政策, 或者我们在调查可疑的不当行为, 我们可以暂停或停止向您提供服务.\n\n使用我们的服务并不让您拥有我们的服务或您所访问的内容的任何知识产权. 除非您获得相关内容所有者的许可或通过其他方式获得法律的许可, 否则您不得使用服务中的任何内容. 本条款并未授予您使用我们服务中所用的任何商标或标志的权利. 请勿删除、隐藏或更改我们服务上显示的或随服务一同显示的任何法律声明.\n\n我们的服务会显示一些不属于 %websiteName% 的内容. 这些内容由发布的实体承担全部责任. 我们可能会审查相关内容, 以确定其是否违法或违反了我们的政策；如果我们有理由相信该内容违反了我们的政策或违法, 我们可以将其删除或拒绝显示. 不过, 这并不意味我们必然会审查内容, 因此请勿想当然地认为我们在进行审查.\n\n在您使用服务的过程中, 我们可能会向您发送服务公告、管理消息和其他信息. 您可以选择不接收上述某些信息. ',
    'default.terms.your-account'                        => '您的账户',
    'default.terms.your-account-content'                => '为了使用我们的某些服务, 您可能需要一个帐户. 您可以创建自己的帐户或者由管理员为您分配帐户. 如果您使用的是由管理员分配的帐户, 可能需要遵守另外的条款或附加条款, 并且您的管理员可能有权访问或停用您的帐户.\n\n为保护您的帐户, 请务必保管好您的密码并对外保密. 您需对您的帐户下进行的所有活动和其他所有与此帐户相关联的活动负全部责任. 严禁以误导性或非法的方式描述帐户或为其指定关键字(包括企图利用他人姓名或声誉)，我们会辨别并更改或删除不恰当、不合法或可能导致我们承担法律责任的任何描述或关键字. 对于任何未经授权而使用您的帐户或任何其他违反安全规定的行为，必须立即通知我们. 我们不会对您的任何行为或疏忽负责，包括由此类行为或疏忽引起的任何类型的损失.',
    'default.terms.privacy-and-copyright'               => '隐私和版权保护',
    'default.terms.privacy-and-copyright-content'       => '%websiteName% 的[隐私权政策](%privacyUrl%)介绍了您在使用我们的服务时, 我们会如何处理您的个人数据和保护您的隐私. 使用我们的服务即表示您同意 %websiteName% 可以按照我们的隐私权政策使用您的个人数据.\n\n我们要求他人尊重其知识产权, 同时也尊重他人的知识产权. 我们会向版权持有人提供信息, 以帮助他们在线管理自己的知识产权. 如果您认为有人侵犯了您的版权, 请通知我们.\n\n我们会根据美国《数字千年版权法》规定的流程, 对涉嫌侵犯版权的通知作出回应并终止屡次侵权人的帐户.',
    'default.terms.your-content'                        => '您在我们服务中发布的内容',
    'default.terms.your-content-content'                => '我们的某些服务允许您上传、提交、存储、发送或接收内容. 您保留对该内容持有的任何知识产权的所有权. 简言之, 属于您的内容依然归您所有.\n\n当您将内容上传、提交、存储或发送到我们的服务, 以及通过我们的服务上传、提交、存储、发送或接收内容时, 您授予%websiteName%(以及我们的合作伙伴)一项全球性的许可, 允许%websiteName%使用、托管、存储、复制、修改、创建衍生作品(例如, 我们为了使您的内容更好地与我们的服务配合使用而进行翻译、改编或其他更改, 由此产生的作品)、传播、出版、公开演示、公开展示和分发此类内容. 您在此许可中授予的权限, 仅能用于运营、宣传和改进我们的服务, 以及开发新的服务. 该项许可在您停止使用我们的服务后依然有效. 某些服务可能会向您提供一些方法, 用于访问和删除您提供给该服务的内容. 此外, 我们某些服务中的条款或设置还会收窄我们对提交至相关服务的内容的使用范围. 对于您提交至我们服务的任何内容, 请确保您拥有向我们授予此许可的必要权利.\n\n如果您在网站上发表评论、资料、链接或通过网站(或允许任何第三方)提供资料(所有此类资料统称为&quot;内容&quot;), 则您将对发布的内容及其造成的所有损失承担全部责任. 不论所涉及的内容以怎样的形式出现(包括但不限于文本、图片、音频或代码), 均不例外. 您只要提供内容即意味着声明并保证所提供的内容不违反以下条款.\n\n您可以在相关服务的隐私权政策或附加条款中找到关于 %websiteName% 如何使用和储存内容的详情. 如果您提交关于我们的服务的反馈或建议, 我们可能会加以利用, 但不对您承担任何义务.',
    'default.terms.software-in-service'                 => '关于我们服务中的软件',
    'default.terms.software-in-service-content'         => '如果某项服务要求下载或包含可下载软件, 该软件可能会在新版本或新功能推出时, 在您的设备上自动更新. 某些服务可能会允许您自行调整自动更新设置.\n\n%websiteName% 授予您免许可使用费的、不可转让的、非独占的全球性个人许可, 允许您使用由 %websiteName% 提供的、包含在服务中的软件. 本许可仅旨在让您通过本条款允许的方式使用由 %websiteName% 提供的服务并从中受益. 本软件遵循[GPL v3](http://www.gnu.org/licenses/gpl-3.0.txt)协议. 该协议授予您复制、分发和修改的权利.',
    'default.terms.service-modify-terminate'            => '修改和终止服务',
    'default.terms.service-modify-terminate-content'    => '我们始终在不断更改和改进我们的服务. 我们可能会增加或删除功能, 也可能暂停或彻底停止某项服务.\n\n您可以随时停止使用我们的服务, 尽管我们对此表示非常遗憾. %websiteName% 也可能随时停止向您提供服务, 或随时对我们的服务增加或设置新的限制.\n\n我们认为您拥有自己数据的所有权并保留对此类数据的访问权限, 这一点非常重要. 如果我们停止某项服务, 在合理可能的情况下, 我们会向用户发出合理的提前通知, 并让用户有机会将信息从服务中汇出.',
    'default.terms.warranties-and-disclaimers'          => '保证和免责声明',
    'default.terms.warranties-and-disclaimers-content'  => '我们在提供服务时将会尽到合理水平的技能和注意义务, 希望您会喜欢使用它们. 但有些关于服务的事项恕我们无法作出承诺.\n\n除本条款或附加条款中明确规定的内容外, %websiteName% 及其供应商和分销商对服务均不作任何具体承诺. 例如, 我们对服务内容、服务的具体功能, 或其可靠性、可用性或满足您需要的能力不作任何承诺. 服务是&quot;按原样&quot;提供的.\n\n某些司法管辖区域会规定特定保证, 例如适销性、特定目的适用性及不侵权的默示保证. 在法律允许的范围内, 我们排除所有保证.',
    'default.terms.liability'                           => '服务的责任',
    'default.terms.liability-content'                   => '在法律允许的范围内, %websiteName% 及其供应商和分销商不承担利润损失、收入损失或数据、财务损失或间接、特殊、后果性、惩戒性或惩罚性损害赔偿的责任.\n\n在法律允许的范围内, %websiteName% 及其供应商和分销商对于本条款项下任何索赔(包括任何默示保证)的全部赔偿责任限于您因使用服务而向我们支付的金额(或我们亦可选择, 再次向您提供该服务).\n\n在所有情况下, %websiteName% 及其供应商和分销商对于任何不能合理预见的损失或损害不承担责任.\n\n我们理解在一些国家/地区, 您作为消费者可以享有某些法定权利. 如果您出于个人目的而使用服务, 对于任何不能通过合同放弃的消费者法定权利, 本条款或附加条款不作限制.',
    'default.terms.business-use'                        => '服务的商业使用',
    'default.terms.business-use-content'                => '如果您代表某家企业使用我们的服务, 该企业必须接受本条款. 对于因使用本服务或违反本条款而导致的或与之相关的任何索赔、起诉或诉讼, 包括因索赔、损失、损害赔偿、起诉、判决、诉讼费和律师费而产生的任何责任或费用, 该企业应对 %websiteName% 及其关联机构、管理人员、代理机构和员工进行赔偿并使之免受损害.',
    'default.terms.about-terms'                         => '关于本条款',
    'default.terms.about-terms-content'                 => '我们可以修改上述条款或任何适用于某项服务的附加条款, 例如, 为反映法律的变更或我们服务的变化而进行的修改. 您应当定期查阅本条款. 我们会在本网页上公布这些条款的修改通知. 我们会在适用的服务中公布附加条款的修改通知. 所有修改的适用不具有追溯力, 且会在公布十四天或更长时间后方始生效. 但是, 对服务新功能的特别修改或由于法律原因所作的修改将立即生效. 如果您不同意服务的修改条款, 应停止使用服务.\n\n如果本条款与附加条款有冲突, 以附加条款为准.\n\n本条款约束 %websiteName% 与您之间的关系, 且不创设任何第三方受益权.\n\n如果您不遵守本条款, 且我们未立即采取行动, 并不意味我们放弃我们可能享有的任何权利(例如, 在将来采取行动).\n\n如果某一条款不能被强制执行, 这不会影响其他条款的效力.\n\n某些国家/地区的法院不会引用加利福尼亚州的法律来处理某些类型的法律纠纷. 如果您居住在上述这些国家/地区, 当加利福尼亚州法律不适用时, 则您所在国家/地区的法律将适用于处理与本条款相关的此类纠纷. 否则, 您同意, 美国加利福尼亚州的法律(不包括加利福尼亚州的法律选择规则)将适用于因本条款或服务引起的或与之相关的任何纠纷. 同样的, 对于与本条款相关的此类纠纷, 如果您所在的国家/地区的法院禁止您同意美国加利福尼亚州圣克拉拉县法院享有管辖权并作为管辖地, 则您当地的法院管辖权和管辖地将适用. 否则, 因本条款或服务引起的或与之相关的所有索赔, 只能向美国加利福尼亚州圣克拉拉县联邦法院或州法院提起诉讼, 且您和 %websiteName% 同意上述法院拥有属人管辖权.',
    # defaults/privacy.phtml
    'default.privacy.title'                             => '隐私和Cookie',
    'default.privacy.privacy'                           => '隐私和Cookie',
    'default.privacy.introdction-content'               => '我们非常重视您的隐私. 因此我们制定了涵盖如何收集、使用、披露、转让以及存储您的信息的隐私政策. 请花些时间熟悉我们针对客户隐私的做法, 如有任何疑问, 请联系我们.\n\n此隐私声明适用于收集并显示这些条款的 %websiteName% 网站、服务和产品, 及其脱机产品支持服务. 它不适用于未显示或未链接到此声明或者具有其自己的隐私声明的 %websiteName% 站点、服务和产品.',
    'default.privacy.information-gathering'             => '信息的收集和使用',
    'default.privacy.information-gathering-content'     => '当您注册%websiteName%时, 我们会询问您的电子邮件地址等信息.\n\n%websiteName%主要将这些信息用于: 产品和服务的规定, 身份的识别与验证, 服务质量的改善和联系客户.\n\n如同大多数互联网服务一样, 我们也会自动收集某些信息, 将其存储在日志文件中. 这类信息包括 Internet协议(IP)地址、浏览器类型和语言、互联网服务提供商(ISP)、引荐/退出网站和应用软件、操作系统、日期/时间戳和点击流数据.',
    'default.privacy.cookies'                           => 'Cookies',
    'default.privacy.cookies-content'                   => '- Cookie是一种小型数据, 通常包含了一个从网络计算机发送并存储在您硬盘上的匿名的唯一标识符.\n- 使用%websiteName%的服务, Cookie是必需的.\n- 我们使用Cookie来记录当前会话的信息, 但是并没有使用永久的Cookie. 当一段时间后, 您会被要求重新登录您的%websiteName%账户, 这主要是为了他人意外地访问您的账户内容.',
    'default.privacy.information-protection'            => '个人信息的保护',
    'default.privacy.information-protection-content'    => '%websiteName% 非常重视您的个人信息的安全. 我们推荐使用传输层安全协议 (TLS) 等加密技术, 在传输过程中保护您的个人信息. 在 %websiteName% 存储您的个人数据时, 我们使用不可逆的数据加密算法对其进行加密.\n\n当您使用某些 %websiteName% 产品、服务或应用软件或者在 %websiteName% 论坛或社交网络服务上发帖时, 您分享的个人信息和内容会被其他用户看到, 他们可能会阅读、收集或使用您的个人信息. 对于您决定在上述情形中分享或提交的个人信息, 您应自行负责. 例如, 如果您在论坛发帖公布您的姓名和电子邮件地址, 这些信息便是公开的. 在使用此类功能时请多加小心.',
    'default.privacy.information-integrity'             => '个人信息的完整性和保留',
    'default.privacy.information-integrity-content'     => '%websiteName% 提供了一些便捷的方法, 让您能够确保您的个人信息准确、完整并及时更新. 我们将在实现本隐私政策中所述目的所必需的期间内保留您的个人信息, 除非法律要求或允许在更长的期间内保留这些信息.',
    'default.privacy.information-access'                => '访问个人信息',
    'default.privacy.information-access-content'        => '您可以登录您的帐户, 帮助我们确保您的联系方式和偏好设置准确、完整并及时更新. 对于我们保留的其他个人信息, 我们将为您提供适用于任何目的的访问权限, 包括要求我们在数据不准确时予以纠正, 或在依据法律或出于合法商业目 %websiteName% 无权保留此等数据时予以删除. 我们有权拒绝处理无实质意义/纠缠式的请求、损害他人隐私权的请求、极端不现实的请求, 以及根据当地法律无需给予信息访问权的请求.',
    'default.privacy.children'                          => '儿童',
    'default.privacy.children-content'                  => '当 %websiteName% 站点或服务收集年龄信息时, 将屏蔽 13 岁以下的用户, 或者在儿童可以使用该站点之前先征得其父母或者监护人的同意.\n\n征得同意后, 儿童帐户即被视为等同其他任何帐户, 包括让帐户持有者能够与其他用户通信.\n\n如隐私声明所述, 家长可以更改或撤消同意.',
    'default.privacy.disclosure'                        => '向第三方披露',
    'default.privacy.disclosure-content'                => '有时候 %websiteName% 会向与 %websiteName% 合作提供产品战略合作伙伴提供某些个人信息. 如果您获准使用服务, 您的帐户需要遵守 %websiteName% 的隐私政策. %websiteName% 只会出于提供或改进我们的产品和服务之目的而与第三方共享个人信息; 而不会出于第三方的营销目的与第三方共享个人信息.\n\n根据您居住国境内外的法律、法律程序、诉讼和/或公共机构和政府部门的要求, %websiteName% 可能有必要披露您的个人信息. 如果我们确定就国家安全、执法或具有公众重要性的其他事宜而言, 披露是必须的或适当的, 我们也可能会披露关于您的信息.\n\n如果我们确定为了执行我们的条款和条件或保护我们的用户, 披露是合理必要的, 我们也可能会披露关于您的信息. 此外, 如果发生重组、合并或出售, 则我们可将我们收集的一切个人信息转让给相关第三方. ',
    'default.privacy.commitment'                        => '对您隐私的承诺',
    'default.privacy.commitment-content'                => '为确保您个人信息的安全，我们会严格执行隐私保护措施.',
    'default.privacy.changes'                           => '更新',
    'default.privacy.changes-content'                   => '%websiteName% 可能会定期更新该政策. 若我们对个人信息的政策发生了显著变化, 我们将会向您的账户发送一封电子邮件或在网站上贴出明显的告示.',
);
