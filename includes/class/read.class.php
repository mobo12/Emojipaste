<?php
Class Read
	{

	public static

	function all_emoji()
		{
		global $db;
		$stmt = $db->prepare("SELECT `id`, `name` FROM `emoji`");
		$stmt->execute();
		$stmt->bind_result($id, $name);
		while ($stmt->fetch())
			{
			$result[] = array(
				'id' => $id,
				'name' => $name
			);
			}

		$stmt->close();
		return $result;
		}

	public static

	function emoji_cat($cat)
		{
		global $db;
		$stmt = $db->prepare("SELECT `id`, `name`, `unicode` FROM `emoji` WHERE `category` = ?");
		$stmt->bind_param('s', $cat);
		$stmt->execute();
		$stmt->bind_result($id, $name, $unicode);
		while ($stmt->fetch())
			{
			$result[] = array(
				'id' => $id,
				'name' => $name,
				'unicode' => $unicode,
			);
			}

		$stmt->close();
		return $result;
		}

	
	public static

	function search_emoji($string)
		{
		global $db;
                $term='%'.$string.'%';
		$stmt = $db->prepare("SELECT `id`, `name`, `unicode`  FROM `emoji` WHERE `name` LIKE ?");
		$stmt->bind_param('s', $term);
		$stmt->execute();
                $result = '';
		$stmt->bind_result($id, $name, $unicode);
		while ($stmt->fetch())
			{
			$result[] = array(
				'id' => $id,
				'name' => $name,
				'unicode' => $unicode,
			);
			}

		$stmt->close();
		return $result;
		}



	}