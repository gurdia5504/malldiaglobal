{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

                $('#regions').on('change', function() {
                        var region_id = this.value;
                        $("#countrys").html('');
                        $.ajax({
                                url: "{{ url('get-countries-by-region') }}",
                                type: "POST",
                                data: {
                                    region_id: region_id,
                                    _token: '{{ csrf_token() }}'
                                },
                                dataType: 'json',
                                success: function(result) {
                                    $('#countrys').html('<option value="">Select Country</option>');
                                    $.each(result.countries, function(key, value) {
                                            $("#countrys").append('<option value="' + value.id +
                                                '">' + value.trisim + '=>' + value.engisim + ' <
                                                /option>');
                                            }); $('#states').html(
                                            '<option value="">Select Country First</option>');
                                    }
                                });


                        });

                    $('#countrys').on('change', function() {
                        var country_id = this.value;
                        $("#states").html('');
                        $.ajax({
                            url: "{{ url('get-states-by-country') }}",
                            type: "POST",
                            data: {
                                country_id: country_id,
                                _token: '{{ csrf_token() }}'
                            },
                            dataType: 'json',
                            success: function(result) {
                                $('#states').html('<option value="">Select State</option>');
                                $.each(result.states, function(key, value) {
                                    $("#states").append('<option value="' + value.id +
                                        '">' +
                                        value.isim + '</option>');
                                });
                                $('#citys').html('<option value="">Select State First</option>');
                            }
                        });


                    });

                    $('#states').on('change', function() {
                        var state_id = this.value;
                        $("#citys").html('');
                        $.ajax({
                            url: "{{ url('get-cities-by-state') }}",
                            type: "POST",
                            data: {
                                state_id: state_id,
                                _token: '{{ csrf_token() }}'
                            },
                            dataType: 'json',
                            success: function(result) {
                                $('#citys').html('<option value="">Select City</option>');
                                $.each(result.cities, function(key, value) {
                                    $("#citys").append('<option value="' + value.id + '">' +
                                        value.isim + '</option>');
                                });

                            }
                        });


                    });
                });
</script> --}}
