<?php

class DevicesTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('devices')->delete();

        	$device = new Device();
        	$device->acquisition_type = 'buyback';
        	$device->hardware_type = 'laptop';
                $device->manufacturer = 'Dell';
                $device->model = 'Inspiron';
                $device->network_boot = 'pass';
                $device->mem_test = 'pass';
                $device->hdd_test = 'pass';
                $device->machine_powers_on = 'yes';
                $device->bios_accessible = 'yes';
                $device->readable_os_license = 'no';
                $device->motherboard_capacitors = 'good';
                $device->missing_loose_parts = 'no';
                $device->usb_port_condition = 'good';
                $device->pcmcia_slot = 'good';
                $device->network_port = 'good';
                $device->restore_partition_or_media = 'yes';
                $device->optical_drive_type = null;
                $device->optical_drive_works = null;
                $device->internal_wifi = 'pass';
                $device->internal_sound = 'pass';
                $device->laptop_screen_size = '13.3';
                $device->laptop_screen_condition = 'good';
                $device->laptop_power_charger = 'yes';
                $device->power_connector_snug = 'yes';
                $device->laptop_battery = null;
                $device->keyboard_condition = 'good';
                $device->loud_fans = 'no';
                $device->purchased_by = 'tech';
                $device->acquisition_cost = 150;
                $device->acquisition_comments = 'Minor scratches on exterior';
                $device->acquisition_grade_abc = 'A';
                $device->refurb_machine_powers_on = null;
                $device->refurb_network_boot = null;
                $device->refurb_mem_test = null;
                $device->refurb_hdd_test = null;
                $device->refurb_keyboard_needs_replacement = null;
                $device->refurb_fans_run_loud = null;
                $device->refurb_power_connector_snug = null;
                $device->refurb_laptop_battery = null;
                $device->refurb_access_bios = null;
                $device->refurb_test_bios_battery = null;
                $device->refurb_os_license_readable = null;
                $device->refurb_motherboard_capacitors = null;
                $device->refurb_usb_condition = null;
                $device->refurb_missing_loose_parts = null;
                $device->refurb_pcmcia_slot = null;
                $device->refurb_network_port = null;
                $device->refurb_restore_partition_or_media = null;
                $device->refurb_optical_drive_type = null;
                $device->refurb_optical_drive_condition = null;
                $device->refurb_internal_wifi = null;
                $device->refurb_internal_sound = null;
                $device->refurb_laptop_screen_size = null;
                $device->refurb_laptop_screen_condition = null;
                $device->refurb_laptop_power_charger = null;
                $device->refurb_laptop_battery_condition = null;
                $device->refurb_keyboard_condition = null;
                $device->refurb_loud_fans = null;
                $device->refurb_refurbished_by = null;
                $device->refurb_grade_abc = null;
                $device->replacement_part1 = 'Windows 7 Home Premium MRR';
                $device->replacement_part1_cost = 35;
                $device->replacement_part2 = null;
                $device->replacement_part2_cost = null;
                $device->replacement_part3 = null;
                $device->replacement_part3_cost = null;
                $device->replacement_part4 = null;
                $device->replacement_part4_cost = null;
                $device->refurbisher_comments = null;
                $device->refurb_cost = 0;
                $device->save();

                $device = new Device();
                $device->acquisition_type = 'recycle';
                $device->hardware_type = 'desktop';
                $device->manufacturer = 'Dell';
                $device->model = 'Optiplex';
                $device->network_boot = 'yes';
                $device->mem_test = 'yes';
                $device->hdd_test = 'yes';
                $device->machine_powers_on = 'yes';
                $device->bios_accessible = 'yes';
                $device->readable_os_license = 'yes';
                $device->motherboard_capacitors = 'good';
                $device->missing_loose_parts = 'no';
                $device->usb_port_condition = 'good';
                $device->pcmcia_slot = null;
                $device->network_port = 'good';
                $device->restore_partition_or_media = 'no';
                $device->optical_drive_type = 'CDRW';
                $device->optical_drive_works = 'yes';
                $device->internal_wifi = null;
                $device->internal_sound = 'yes';
                $device->laptop_screen_size = null;
                $device->laptop_screen_condition = null;
                $device->laptop_power_charger = null;
                $device->power_connector_snug = null;
                $device->laptop_battery = null;
                $device->keyboard_condition = null;
                $device->loud_fans = 'no';
                $device->purchased_by = 'tech';
                $device->acquisition_cost = 10;
                $device->acquisition_comments = 'Add DVDRW to unit';
                $device->acquisition_grade_abc = 'A';
                $device->refurb_machine_powers_on = 'yes';
                $device->refurb_network_boot = 'yes';
                $device->refurb_mem_test = 'yes';
                $device->refurb_hdd_test = 'yes';
                $device->refurb_keyboard_needs_replacement = null;
                $device->refurb_fans_run_loud = 'no';
                $device->refurb_power_connector_snug = null;
                $device->refurb_laptop_battery = null;
                $device->refurb_access_bios = 'yes';
                $device->refurb_test_bios_battery = 'yes';
                $device->refurb_os_license_readable = 'yes';
                $device->refurb_motherboard_capacitors = 'good';
                $device->refurb_usb_condition = 'pass';
                $device->refurb_missing_loose_parts = 'no';
                $device->refurb_pcmcia_slot = null;
                $device->refurb_network_port = 'good';
                $device->refurb_restore_partition_or_media = 'no';
                $device->refurb_optical_drive_type = 'DVDRW';
                $device->refurb_optical_drive_condition = 'pass';
                $device->refurb_internal_wifi = null;
                $device->refurb_internal_sound = 'good';
                $device->refurb_laptop_screen_size = null;
                $device->refurb_laptop_screen_condition = null;
                $device->refurb_laptop_power_charger = null;
                $device->refurb_laptop_battery_condition = null;
                $device->refurb_keyboard_condition = null;
                $device->refurb_loud_fans = 'no';
                $device->refurb_refurbished_by = 'tech';
                $device->refurb_grade_abc = 'A';
                $device->replacement_part1 = 'DVDRW';
                $device->replacement_part1_cost = 5;
                $device->replacement_part2 = 'Windows 7 Home Premium MRR';
                $device->replacement_part2_cost = 35;
                $device->replacement_part3 = null;
                $device->replacement_part3_cost = null;
                $device->replacement_part4 = null;
                $device->replacement_part4_cost = null;
                $device->refurbisher_comments = null;
                $device->refurb_cost = 0;
                $device->save();

                $device = new Device();
                $device->acquisition_type = 'buyback';
                $device->hardware_type = 'desktop';
                $device->manufacturer = 'HP';
                $device->model = null;
                $device->network_boot = 'no';
                $device->mem_test = 'no';
                $device->hdd_test = 'no';
                $device->machine_powers_on = 'no';
                $device->bios_accessible = 'no';
                $device->readable_os_license = 'yes';
                $device->motherboard_capacitors = 'good';
                $device->missing_loose_parts = 'no';
                $device->usb_port_condition = 'good';
                $device->pcmcia_slot = null;
                $device->network_port = 'no';
                $device->restore_partition_or_media = 'no';
                $device->optical_drive_type = 'DVDRW';
                $device->optical_drive_works = 'no';
                $device->internal_wifi = null;
                $device->internal_sound = 'yes';
                $device->laptop_screen_size = null;
                $device->laptop_screen_condition = null;
                $device->laptop_power_charger = null;
                $device->power_connector_snug = null;
                $device->laptop_battery = null;
                $device->keyboard_condition = null;
                $device->loud_fans = 'no';
                $device->purchased_by = 'tech';
                $device->acquisition_cost = 0;
                $device->acquisition_comments = 'Does not power on, check power supply.';
                $device->acquisition_grade_abc = 'C';
                $device->refurb_machine_powers_on = 'yes';
                $device->refurb_network_boot = 'yes';
                $device->refurb_mem_test = 'yes';
                $device->refurb_hdd_test = 'yes';
                $device->refurb_keyboard_needs_replacement = null;
                $device->refurb_fans_run_loud = 'no';
                $device->refurb_power_connector_snug = null;
                $device->refurb_laptop_battery = null;
                $device->refurb_access_bios = 'yes';
                $device->refurb_test_bios_battery = 'yes';
                $device->refurb_os_license_readable = 'yes';
                $device->refurb_motherboard_capacitors = 'good';
                $device->refurb_usb_condition = 'pass';
                $device->refurb_missing_loose_parts = 'no';
                $device->refurb_pcmcia_slot = null;
                $device->refurb_network_port = 'good';
                $device->refurb_restore_partition_or_media = 'no';
                $device->refurb_optical_drive_type = 'DVDRW';
                $device->refurb_optical_drive_condition = 'pass';
                $device->refurb_internal_wifi = null;
                $device->refurb_internal_sound = 'good';
                $device->refurb_laptop_screen_size = null;
                $device->refurb_laptop_screen_condition = null;
                $device->refurb_laptop_power_charger = null;
                $device->refurb_laptop_battery_condition = null;
                $device->refurb_keyboard_condition = null;
                $device->refurb_loud_fans = 'no';
                $device->refurb_refurbished_by = 'tech';
                $device->refurb_grade_abc = 'A';
                $device->replacement_part1 = 'Windows 7 Home Premium MRR';
                $device->replacement_part1_cost = 35;
                $device->replacement_part2 = 'ATX Power Supply';
                $device->replacement_part2_cost = 20;
                $device->replacement_part3 = null;
                $device->replacement_part3_cost = null;
                $device->replacement_part4 = null;
                $device->replacement_part4_cost = null;
                $device->refurbisher_comments = null;
                $device->refurb_cost = 0;
                $device->save();


	}
}