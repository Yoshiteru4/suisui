# ランチマッチングアプリ　「SuiSui」
- 忙しいビジネスパーソンと人気飲食店のランチマッチングアプリ

# URL
- herokuを使用し、デプロイしました。機会があれば、AWSを使用し、デプロイに挑戦したいと考えています。
http://neoneat.herokuapp.com/

# SuiSuiアプリ事業計画書（以下リンクよりご覧ください。）
https://docs.google.com/presentation/d/1twJhaFJQ25KNNphMiTOtcgcWnonyPkpL/edit#slide=id.g108322b7a13_0_61

# 制作理由
- 詳しくは、事業計画書をご覧下さい。

# こだわったポイント
- 検索機能 ~ 検索したいメニューを「料理名」、「料金」で検索をかけれる機能を実装しました。工夫した点は、条件分岐を設定し、いくつかのパターンで検索結果が表示されるようにしたことです。例えば、「料理名」のみを検索すると、入力した条件と一致した「料理名」が表示されます。「料金」のみ、「料理名」&「料金」といった検索条件でも正しく検索結果が表示されるようになっています。

- クレジットカード決済機能 ~ PayjpのAPIを使用したクレジットカード決済機能を実装しました。この機能を取り入れた理由は2つあります。1つ目は、実際に料理を注文するユーザー（ビジネスパーソン）は、「店舗内でレジの待ち時間が長く、午後の仕事に間に合わない」という不満を抱えています。2つ目は、アプリを使用するレストラン側は、忙しいランチタイムでの店舗のレジ業務を廃止し、クレジットカード決済にシフトしたいというニーズを持っていました。以上の2点の理由から、クレジットカード決済を実装しました。また、決済業者のページに移動せず、料金を払うサイト内で直接決済処理ができるので、APIを使用しました。

- MailStrap ~ ユーザーが新規登録した際、「登録完了メール」が送信されるようになっています、MailtrapのAPIを用いて、実装しました。

# 苦労したこと

# ユーザーからのフィードバック
- 検索機能は料理名・料金だけではなく、マップ検索も欲しい。→Google MAPのAPIを利用したい。
- レストラン側は、顧客情報がもっと欲しい。（現状：ユーザー名・メールアドレスのみ。）例えば、ユーザーの年齢層。どの商品がどの年齢層に売れているのか、わかるようにしたい。→ユーザーテーブルにカラムを追加する必要がある。

# 今後の課題
- 企画・要件定義、設計などの上流工程の段階に時間を費やすこと。　今回の開発では、企画・設計からコーディングまで0からチーム3人で行いました。3人共々、今までの経験からコードを書く技術力はある程度ありましたが、要件定義・ERD・画面遷移図の作成などの上流工程の作業は全くの未経験でした。そのため、上流工程の困難さや重要性を理解しないまま、下流工程に移ったため、実際にコードを書く際、カラムの不足やリレーションなどにミスがあり、進捗にかなり遅れを生じさせました。今回のチーム開発で、上流工程の重要性はかなり実感できたので、今後は少しでも多くの時間を費やし、プロジェクトを上手く推進させるエンジニアになりたいと考えています。

