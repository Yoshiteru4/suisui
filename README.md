# ランチマッチングアプリ　「SuiSui」
- 忙しいビジネスパーソンと人気飲食店のランチマッチングアプリ

# アプリのURL
- herokuを使用し、デプロイしました。機会があれば、AWSを使用し、デプロイに挑戦したいと考えています。
- 申し訳ありません！herokuだと、一部、決済機能やレストラン側のページでエラーが出てしまいます！
- http://neoneat.herokuapp.com/

# SuiSuiアプリ事業計画書（以下リンクよりご覧ください。）
https://docs.google.com/presentation/d/1twJhaFJQ25KNNphMiTOtcgcWnonyPkpL/edit#slide=id.g108322b7a13_0_61

# 制作理由
- 詳しくは、事業計画書をご覧下さい。

# 機能一覧(サーバーサイド)
- いいね機能（＝お気に入り機能）
- ページネーション機能
- PayjpのAPIを使用した決済機能
- 検索機能
- CloudinaryのAPIを使用したメニュー掲載機能
- マルチAuth機能
- Mailtrap
- アカウント情報編集機能
- 注文機能

# DB設計

## usersテーブル
| Column | type |
| ------------- | ------------- |
| id  | increments  |
| name  | string  |
| email  | string  |
| email_verified_at  | timestamp  |
| password  | string  |
| rememberToken  |   |
| timestamps  |   |
| payjp_customer_id  | string  |

### Association
- has_many :orders
- has_many :favorites

## restaurantsテーブル

| Column | type |
| ------------- | ------------- |
| id  | increments  |
| name  | string  |
| email  | string  |
| email_verified_at  | timestamp  |
| password  | string  |
| rememberToken  |   |
| timestamps  |   |

### Association
- has_many :menus
- has_many :orders

## favoritesテーブル

| Column | type |
| ------------- | ------------- |
| id  | increments  |
| user_id  | integer  |
| menu_id  | integer  |
| timestamps  |   |

### Association
- has_many :menus
- has_many :orders

## menusテーブル

| Column | type |
| ------------- | ------------- |
| id  | increments  |
| food  | string  |
| price  | integer  |
| restaurant_id  | integer  |
| timestamps  |   |

### Association
- belongs to:restaurant
- has_many :orders

## ordersテーブル

| Column | type |
| ------------- | ------------- |
| id  | increments  |
| menu_id  | integer |
| user_id  | integer  |
| restaurant_id  | integer  |
| totalprice  | integer  |
| menu_amount  | integer  |
| person_amount  | integer  |
| come_date  | string  |
| come_time  | string  |
| timestamps  |   |

### Association
- belongs to:user
- belongs to:restaurant
- belongs to:menu

## reviewsテーブル(制作中)
| Column | type |
| ------------- | ------------- |
| id  | text  |
| user_id  | integer |
| timestamps  |   |

## genresテーブル(制作中)

| Column | type |
| ------------- | ------------- |
| id  | increments  |
| name  | string |
| timestamps  |   |


# こだわったポイント
- 検索機能 ~ 検索したいメニューを「料理名」、「料金」で検索をかけれる機能を実装しました。工夫した点は、条件分岐を設定し、いくつかのパターンで検索結果が表示されるようにしたことです。例えば、「料理名」のみを検索すると、入力した条件と一致した「料理名」が表示されます。「料金」のみ、「料理名」&「料金」といった検索条件でも正しく検索結果が表示されるようになっています。

- クレジットカード決済機能 ~ PayjpのAPIを使用したクレジットカード決済機能を実装しました。この機能を取り入れた理由は2つあります。1つ目は、実際に料理を注文するユーザー（ビジネスパーソン）は、「店舗内でレジの待ち時間が長く、午後の仕事に間に合わない」という不満を抱えています。2つ目は、アプリを使用するレストラン側は、忙しいランチタイムでの店舗のレジ業務を廃止し、クレジットカード決済にシフトしたいというニーズを持っていました。以上の2点の理由から、クレジットカード決済を実装しました。また、決済業者のページに移動せず、料金を払うサイト内で直接決済処理ができるので、APIを使用しました。

- MailStrap ~ ユーザーが新規登録した際、「登録完了メール」が送信されるようになっています、MailtrapのAPIを用いて、実装しました。

# 苦労したこと
- サーバーサイド機能の実装　〜　cloudinary（画像投稿機能）・Payjp（決済機能）といったWEBのAPIを用いた実装を初めてだったため、仕組みからコーディングの理解に時間がかかったこと。

# ユーザーからのフィードバック
- 検索機能は料理名・料金だけではなく、マップ検索も欲しい。→Google MAPのAPIを利用したい。
- レストラン側は、顧客情報がもっと欲しい。（現状：ユーザー名・メールアドレスのみ。）例えば、ユーザーの年齢層。どの商品がどの年齢層に売れているのか、わかるようにしたい。→ユーザーテーブルにカラムを追加する必要がある。

# ユーザーからのフィードバックを基に改善した点
- 注文機能ができる流れを増やしたこと。〜「トップ画面のメニュー」・「検索機能があるメニュー画面」の２つのみしか注文できる流れを実装していませんでした。しかし、ユーザーからのフィードバックを基に、「お気に入りリスト
」・「注文履歴」の２つにも注文機能を実装して欲しいとの要望がありました。ユーザーの嗜好性から、一度注文した商品を再度注文する可能性が高いこと（特に、お気に入りリストの商品）、また検索やトップ画面のメニューから探すのはユーザーのストレスにつながると考え、お気に入り・注文履歴の画面からでも注文できる仕組みを実装しました。

# 今後の課題
- 企画・要件定義、設計などの上流工程の段階に時間を費やすこと。　今回の開発では、企画・設計からコーディングまで0からチーム3人で行いました。3人共々、今までの経験からコードを書く技術力はある程度ありましたが、要件定義・ERD・画面遷移図の作成などの上流工程の作業は全くの未経験でした。そのため、上流工程の困難さや重要性を理解しないまま、下流工程に移ったため、実際にコードを書く際、カラムの不足やリレーションなどにミスがあり、進捗にかなり遅れを生じさせました。今回のチーム開発で、上流工程の重要性はかなり実感できたので、今後は少しでも多くの時間を費やし、プロジェクトを上手く推進させるエンジニアになりたいと考えています。

- いいね機能の実装~『いいね』及び『いいねの取り消し』は一旦ブラウザをリロードしないとできない。

