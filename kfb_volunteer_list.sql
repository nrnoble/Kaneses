SELECT `last_name` as 'Last Name',`first_name` as 'First Name', `email` as 'Email',  `phone` as Phone,
  `Type`, `Activities`, `Availability` ,`AvailabilityDescription` as 'Discription', `Comments`,
  `create_date`, `last_update`, `pkey` FROM `volunteers`
WHERE 1 LIMIT 10