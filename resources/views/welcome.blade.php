<!DOCTYPE html>
<html>
  <head>
    <title>買い物リストアプリ</title>
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
  </head>
  <body>
  @php
  dump($tasks)
  @endphp
    <div class="header">
      <div class="header-logo">買い物リストアプリ</div>
  　</div>
  <form action="/add" method="post" id="container">
      @csrf
      <label>リストの追加</label>
      <input required type="text" name="add" placeholder="買うものを入力してください" class="text-input"/>
      <input type="submit" value="追加" id="add-button"/>
    </form>

    <ul id="shopping-list">
@foreach($tasks as $task)
      <li>{{ $task->content }} </li>
      <form action="/delete" method="post" id="delete-button">
      @csrf
        <li>
            <span>
            <input type="submit" name="button" id="delete" value="削除"></input>
            <input type="hidden" name="id" value="{{ $task->id }}"></input>
            </span>
          </li>
      </form>
@endforeach
    </ul>

    <div class="footer">
      <div class="serching">おススメ検索サイト
          <ul class="serching-li">
              <li class= "cook">お料理</li>
              <li class= "total">総合</li>
              <li class= "clothing">衣類</li>
          </ul>
      </div>
      <img class="cookpad" src="https://th.bing.com/th/id/R.49697d7c025709f0c9466f0c1dbd82a6?rik=mbnbpyaZqvJ1RQ&riu=http%3a%2f%2falishan-organics.com%2fwordpress%2fwp-content%2fuploads%2f2018%2f03%2flogo_ogp-b768704fa9827b7aabfe9548219648b3304423a1002d81e2e7c8b4045708f0c8.png&ehk=oc8xfZTSIRJNwWqLTxD6Qu%2fOYVaqEs%2f8BQNT0wQI3L0%3d&risl=&pid=ImgRaw&r=0">
      <a href="https://cookpad.com/" target="_blank">クックパッドへ</a>
      <img class="amazon" src="https://th.bing.com/th/id/OIP.O-oxvcAdPTEHPrkJ86JwqQHaGB?pid=ImgDet&rs=1">
      <a href="https://www.amazon.co.jp/?&tag=hydjpabky-22&ref=pd_sl_8eaqjij3p1_e&adgrpid=118839724067&hvadid=492510141259&hvqmt=e&hvdev=c&hvtargid=kwd-893523692&hydadcr=27920_11832004" target="_blank">amazonへ</a>
      <img class="zozotown" src="https://th.bing.com/th/id/R.a52b30a0925d185af40cc76ecb9bdeee?rik=%2bxFgo%2b3brbIaWg&riu=http%3a%2f%2fimgc.appbank.net%2fc%2fwp-content%2fuploads%2f2015%2f10%2f151002_zozotown-17.jpg&ehk=9ANaUyZ4l35DAXLxn1DD0FgKDgy4%2bYNcQ5bGfz1XGjg%3d&risl=&pid=ImgRaw&r=0">
      <a href="https://shop-list.com/women/?item=outlet&yclid=YSS.1000207817.EAIaIQobChMIta-mxZu98gIVAVpgCh0TsABWEAAYASAAEgKiEPD_BwE" target="_blank">zozotownへ</a>
  　</div>
  </body>
</html>
