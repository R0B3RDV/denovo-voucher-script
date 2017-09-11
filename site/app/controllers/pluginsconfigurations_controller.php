<?php
// Copyright 2006-2017 Faisal Thaheem
// 
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
// 
//     http://www.apache.org/licenses/LICENSE-2.0
// 
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

class PluginsconfigurationsController extends AppController{
	
	var $name = 'Pluginsconfigurations';
	var $helpers = array('Paginator');
	var $layout = 'backoffice';
	
	function beforeFilter(){
		
		parent::beforeFilter();
	}
	
	/*
	* Admin Area
	*/
	function admin_index()
	{
		$this->layout = 'ajax';
		$installedPlugins = $this->Pluginsconfiguration->getinstalledPlugins();
		$this->set('pluginlist', $installedPlugins);
	}
	
	/*
	 * Manager Area
	 */
	function manager_index()
	{
		$this->layout = 'ajax';
		$installedPlugins = $this->Pluginsconfiguration->getinstalledPlugins();
		$this->set('pluginlist', $installedPlugins);
	}
}
?>