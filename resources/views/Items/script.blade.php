
<script type="text/javascript">
bootstrapValidate(
   ['#txtauction', '#txtlocation'],
   'required:Please fill out this field!',
);
bootstrapValidate(
   ['#dropdown', '#txtdate'],
   'required:Please fill out this field!',
);
bootstrapValidate(
   '#txttime',
   'required:Please fill out this field!',
);
bootstrapValidate(
   ['#txtdimension', '#txtartist'],
   'required:Please fill out this field!',
);
bootstrapValidate(
   ['#txtlotrefno','#txtlotno'],
   'numeric:Please only enter numeric characters!',
);
bootstrapValidate(
   ['#txtperiod','#txtprice'],
   'numeric:Please only enter numeric characters!',
);
bootstrapValidate(
   '#txttitle',
   'min:5:Enter at least 5 characters!',
);
bootstrapValidate(
   '#txtdesc',
   'min:20:Enter at least 20 characters!',
);

</script>
