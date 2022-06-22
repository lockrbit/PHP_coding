<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>課題2</title>
	<style>
		form {
			width: 870px;
			border: solid 2px;
			font-size: 15px;
			padding: 10px;
			margin: 0 auto;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			border: solid 2px;
			font-size: 15px;
		}
		td{
			border: solid 2px;
			padding: 5px 30px 5px 10px;
		}
		input,select,textarea{
			margin-left: 2%;
		}
		tt{
			text-align: center;
		}
		.submit{
			width: 20%;
			font-size: 17px;
			margin: 10px 0 10px 45%;
		}
	</style>
</head>
<body>
  <form action="kadai_crear.php" method="post">
		<p>以下の項目を入力or選択してください。</p>

		<table>
			<tr>
				<td class="var">
					<tt>氏名</tt>
				</td>
				<td>
					<input type="text" size="20" name="name">
				</td>
			</tr>

			<tr>
			<td class="var">
				<tt>趣味</tt>
			</td>
				<td>
				<input type="checkbox" size="6" name="hobby[]" value="読書">読書
				<input type="checkbox" size="6" name="hobby[]" value="映画鑑賞">映画鑑賞
				<input type="checkbox" size="6" name="hobby[]" value="スポーツ">スポーツ
				<input type="checkbox" size="6" name="hobby[]" value="ショッピング">ショッピング
				<input type="checkbox" size="6" name="hobby[]" value="旅行">旅行
			</td>
			</tr>

			<tr>
			<td class="var">
				<tt>所属</tt>
			</td>
			<td>
				<select name="syozoku">
					<option value="小学校">小学校</option>
					<option value="中学校">中学校</option>
					<option value="高等学校">高等学校</option>
					<option value="大学校">大学校</option>
					<option value="専門学校">専門学校</option>
				</select>
			</td>
			</tr>

			<tr>
				<td class="var">
					<tt>ご意見</tt>
					</td>
					<td>
					<textarea name="opinions" rows="8" cols="80"></textarea>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<input type="submit" value="確認画面へ" class="submit">
				</td>
			</tr>

		</table>
  </form>
</body>
</html>
