<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'action' => array(
		'actualize' => 'フィードを更新する',
		'add' => '追加',
		'back' => '← 戻る',
		'back_to_rss_feeds' => '← RSSフィードに戻る',
		'cancel' => 'キャンセル',
		'create' => '作成',
		'delete_muted_feeds' => 'ミュートにしているフィードを削除する',
		'demote' => '寄付',
		'disable' => '無効',
		'empty' => '空',
		'enable' => '有効',
		'export' => 'エクスポート',
		'filter' => 'フィルター',
		'import' => 'インポート',
		'load_default_shortcuts' => 'デフォルトのショートカットを読み込む',
		'manage' => '管理',
		'mark_read' => '既読にする',
		'open_url' => 'URLを開く',
		'promote' => 'プロモート',
		'purge' => '不要なデータの削除',
		'refresh_opml' => 'OPMLを更新する',
		'remove' => '消去',
		'rename' => '名前を変更する',
		'see_website' => 'ウェブサイトを表示する',
		'submit' => '保存',
		'truncate' => 'すべての記事を消去する',
		'update' => '更新',
	),
	'auth' => array(
		'accept_tos' => '私は<a href="%s">利用規約</a>を承認します。',
		'email' => 'メールアドレス',
		'keep_logged_in' => 'ログインを保持する <small>%s日後にログアウトする</small>',
		'login' => 'ログイン',
		'logout' => 'ログアウト',
		'password' => array(
			'_' => 'パスワード',
			'format' => '<small>最低7文字必要です</small>',
		),
		'registration' => array(
			'_' => '新規アカウント',
			'ask' => 'アカウントを作成しますか？',
			'title' => 'アカウント作成',
		),
		'username' => array(
			'_' => 'ユーザー名',
			'format' => '<small>最大16文字の英数字</small>',
		),
	),
	'date' => array(
		'Apr' => '\\4\\月',
		'Aug' => '\\8\\月',
		'Dec' => '\\12\\月',
		'Feb' => '\\2\\月',
		'Jan' => '\\1\\月',
		'Jul' => '\\7\\月',
		'Jun' => '\\6\\月',
		'Mar' => '\\3\\月',
		'May' => '\\5\\月',
		'Nov' => '\\11\\月',
		'Oct' => '\\10\\月',
		'Sep' => '\\9\\月',
		'apr' => '4月',
		'april' => '4月',
		'aug' => '8月',
		'august' => '8月',
		'before_yesterday' => 'おととい',
		'dec' => '12月',
		'december' => '12月',
		'feb' => '2月',
		'february' => '2月',
		'format_date' => 'Y\\年n\\月j\\日',
		'format_date_hour' => 'Y\\年n\\月j\\日 H\\:i',
		'fri' => '金',
		'jan' => '1月',
		'january' => '1月',
		'jul' => '7月',
		'july' => '7月',
		'jun' => '6月',
		'june' => '6月',
		'last_2_year' => '直近2年間',
		'last_3_month' => '直近3ヶ月',
		'last_3_year' => '直近3年間',
		'last_5_year' => '直近5年間',
		'last_6_month' => '直近6ヶ月',
		'last_month' => '先月',
		'last_week' => '先週',
		'last_year' => '去年',
		'mar' => '3月',
		'march' => '3月',
		'may' => '5月',
		'may_' => '5月',
		'mon' => '月',
		'month' => '月',
		'nov' => '11月',
		'november' => '11月',
		'oct' => '10月',
		'october' => '10月',
		'sat' => '土',
		'sep' => '9月',
		'september' => '9月',
		'sun' => '日',
		'thu' => '木',
		'today' => '今日',
		'tue' => '火',
		'wed' => '水',
		'yesterday' => '昨日',
	),
	'dir' => 'ディレクトリ',
	'freshrss' => array(
		'_' => 'FreshRSS',	// IGNORE
		'about' => 'FreshRSSについて',
	),
	'js' => array(
		'category_empty' => '空白のカテゴリ',
		'confirm_action' => '本当に実行してもいいですか？ キャンセルはできません！',
		'confirm_action_feed_cat' => '本当に実行してもいいですか？ 関連するお気に入りとユーザークエリは失われます。キャンセルできません！',
		'feedback' => array(
			'body_new_articles' => 'FreshRSSに %%d の新規記事があります。',
			'body_unread_articles' => '(未読: %%d)',
			'request_failed' => 'リクエストが失敗しました。インターネット接続に問題がある可能性があります。',
			'title_new_articles' => 'FreshRSS: 新規記事！',
		),
		'new_article' => '新しい記事があります。クリックしてページを更新してください。',
		'should_be_activated' => 'JavaScriptは有効になっている必要があります。',
	),
	'lang' => array(
		'cz' => 'Čeština',	// IGNORE
		'de' => 'Deutsch',	// IGNORE
		'el' => 'Ελληνικά',	// IGNORE
		'en' => 'English',	// IGNORE
		'en-us' => 'English (United States)',	// IGNORE
		'es' => 'Español',	// IGNORE
		'fa' => 'فارسی',	// IGNORE
		'fr' => 'Français',	// IGNORE
		'he' => 'עברית',	// IGNORE
		'hu' => 'Magyar',	// IGNORE
		'id' => 'Bahasa Indonesia',	// IGNORE
		'it' => 'Italiano',	// IGNORE
		'ja' => '日本語',	// IGNORE
		'ko' => '한국어',	// IGNORE
		'lv' => 'Latviešu',	// IGNORE
		'nl' => 'Nederlands',	// IGNORE
		'oc' => 'Occitan',	// IGNORE
		'pl' => 'Polski',	// IGNORE
		'pt-br' => 'Português (Brasil)',	// IGNORE
		'ru' => 'Русский',	// IGNORE
		'sk' => 'Slovenčina',	// IGNORE
		'tr' => 'Türkçe',	// IGNORE
		'zh-cn' => '简体中文',	// IGNORE
		'zh-tw' => '正體中文',	// IGNORE
	),
	'menu' => array(
		'about' => 'FreshRSSについて',
		'account' => 'アカウント',
		'admin' => '管理者',
		'archiving' => 'アーカイブ',
		'authentication' => '認証',
		'check_install' => 'インストール時のチェック',
		'configuration' => '設定',
		'display' => 'ディスプレイ',
		'extensions' => '拡張機能',
		'logs' => 'ログ',
		'queries' => 'ユーザークエリ',
		'reading' => 'リーディング',
		'search' => '単語で検索するかハッシュタグで検索する',
		'search_help' => '発展的な<a href="https://freshrss.github.io/FreshRSS/en/users/10_filter.html#with-the-search-field" target="_blank">検索パラメータ</a>についてはドキュメントを参照してください。',
		'sharing' => '共有',
		'shortcuts' => 'ショートカット',
		'stats' => '統計',
		'system' => 'システム設定',
		'update' => '更新',
		'user_management' => 'ユーザー管理',
		'user_profile' => 'プロフィール',
	),
	'period' => array(
		'days' => '日',
		'hours' => '時',
		'months' => '月',
		'weeks' => '週',
		'years' => '年',
	),
	'share' => array(
		'Known' => 'よく使われるサイト',
		'archiveORG' => 'archive.org',	// IGNORE
		'archivePH' => 'archive.ph',	// IGNORE
		'blogotext' => 'Blogotext',	// IGNORE
		'buffer' => 'Buffer',	// IGNORE
		'clipboard' => 'クリップボード',
		'diaspora' => 'Diaspora*',	// IGNORE
		'email' => 'メール',
		'email-webmail-firefox-fix' => 'メール (Webメール - Firefox向けの修正)',
		'facebook' => 'Facebook',	// IGNORE
		'gnusocial' => 'GNU social',	// IGNORE
		'jdh' => 'Journal du hacker',	// IGNORE
		'lemmy' => 'Lemmy',	// IGNORE
		'linkding' => 'Linkding',	// IGNORE
		'linkedin' => 'LinkedIn',	// IGNORE
		'mastodon' => 'Mastodon',	// IGNORE
		'movim' => 'Movim',	// IGNORE
		'omnivore' => 'Omnivore',	// IGNORE
		'pinboard' => 'Pinboard',	// IGNORE
		'pinterest' => 'Pinterest',	// IGNORE
		'pocket' => 'Pocket',	// IGNORE
		'print' => '印刷',
		'raindrop' => 'Raindrop.io',	// IGNORE
		'reddit' => 'Reddit',	// IGNORE
		'shaarli' => 'Shaarli',	// IGNORE
		'twitter' => 'Twitter',	// IGNORE
		'wallabag' => 'wallabag v1',	// IGNORE
		'wallabagv2' => 'wallabag v2',	// IGNORE
		'web-sharing-api' => 'システム共有',
		'whatsapp' => 'Whatsapp',	// IGNORE
		'xing' => 'Xing',	// IGNORE
	),
	'short' => array(
		'attention' => '警告！',
		'blank_to_disable' => '無効にするには空白にしてください',
		'by_author' => '著者:',
		'by_default' => 'デフォルト',
		'damn' => '終了！',
		'default_category' => 'カテゴリー未登録',
		'no' => 'NO',
		'not_applicable' => '利用不可能',
		'ok' => 'OK！',
		'or' => 'または',
		'yes' => 'OK',
	),
	'stream' => array(
		'load_more' => '記事をもっと読み込む',
		'mark_all_read' => 'すべてを既読にする',
		'nothing_to_load' => 'これ以上の記事はありません',
	),
);
