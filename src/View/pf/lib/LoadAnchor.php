<?php 
/*
 * Copyright (C) 2004-2017 Soner Tari
 *
 * This file is part of UTMFW.
 *
 * UTMFW is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * UTMFW is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with UTMFW.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace View;

class LoadAnchor extends Rule
{
	function display($ruleNumber, $count)
	{
		$this->dispHead($ruleNumber);
		$this->dispAnchor();
		$this->dispTail($ruleNumber, $count);
	}
	
	function dispAnchor()
	{
		?>
		<td title="<?php echo _TITLE('Anchor') ?>">
			<?php echo $this->rule['anchor']; ?>
		</td>
		<td title="<?php echo _TITLE('File') ?>" colspan="11">
			<?php echo $this->rule['file']; ?>
		</td>
		<?php
	}

	function input()
	{
		$this->inputKey('anchor');
		$this->inputKey('file');

		$this->inputKey('comment');
		$this->inputDelEmpty();
	}

	function edit($ruleNumber, $modified, $testResult, $generateResult, $action)
	{
		$this->editIndex= 0;
		$this->ruleNumber= $ruleNumber;

		$this->editHead($modified);

		$this->editText('anchor', _TITLE('Anchor'), 'anchor-id', NULL, _CONTROL('name, may be nested'));
		$this->editText('file', _TITLE('File'), FALSE, 40, _CONTROL('filename'));

		$this->editComment();
		$this->editTail($modified, $testResult, $generateResult, $action);
	}
}
?>
