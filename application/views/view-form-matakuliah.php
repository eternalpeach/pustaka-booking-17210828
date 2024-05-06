<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input Matakuliah</title>
</head>

<body>
<center>
		<form action="<?= base_url('Matakuliah/cetak'); ?>" method="post">
			<table>
				<tr>
					<th colspan="3">Form Input Data Mata Kuliah</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr />
					</td>
				</tr>
				<tr>
					<th>Kode MTK</th>
					<th>:</th>
					<td>
						<input type="text" name="kode" id="kode" />
					</td>
				</tr>               
				<tr>
                    <td colspan="2"></td>
                    <td style="color:red; font-size=12px;">
                        <?= form_error('kode'); ?>
                    </td>
                </tr>
				<tr>
					<th>Nama MTK</th>
					<td>:</td>
					<td>
						<input type="text" name="nama" id="nama" />
					</td>
				</tr>
				<tr>
                    <td colspan="2"></td>
                    <td style="color:red; font-size=12px;">
                        <?= form_error('nama'); ?>
                    </td>
                </tr>
				<tr>
					<th>SKS</th>
					<td>:</td>
					<td>
						<select name="sks" id="sks">
							<option value="">Pilih SKS</option>
							<option value="2" <?= set_select('sks', 2); ?>>2</option>
                            <option value="3" <?= set_select('sks', 3); ?>>3</option>
                            <option value="4" <?= set_select('sks', 4); ?>>4</option>
						</select>
					</td>
				</tr>
				<tr>
                    <td colspan="2"></td>
                    <td style="color:red; font-size=12px;">
                        <?= form_error('sks'); ?>
                    </td>
                </tr>
				<tr>
					<th>Status MTK</th>
					<th>:</th>
					<td>
						<input type="radio" name="status" id="status" value="Unggulan" <?= set_radio('status', 'Unggulan'); ?>>Unggulan
						<input type="radio" name="status" id="status" value="Tidak Unggulan" <?= set_radio('status', 'Tidak Unggulan'); ?>>Tidak Unggulan
					</td>
				</tr>
				<tr>
                    <td colspan="2"></td>
                    <td style="color:red; font-size=12px;">
                        <?= form_error('status'); ?>
                    </td>
                </tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="Submit" />
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>