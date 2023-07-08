<?php
    class ServiceItem {

        public function generate($id, $label, $price) {
            return "<tr id='$id'>
            <th scope='row'>$id</th>
            <td>
                <input type='text' value='$label' id='label' class='form-control' />
            </td>
            <td>
                <input type='number' value='$price' id='price' class='form-control' />
            </td>
            <td class='text-center'>
                <a id='save' 
                    href='javascript: updateService($id)' 
                    class='btn p-0 m-0 text-dark'>
                    <i class='fa-regular fa-floppy-disk fa-2x'></i>
                </a>
                <button id='delete'
                        class='btn p-0 m-0 text-dark' 
                        data-service-id='$id' 
                        data-service-label='$label' 
                        data-service-price='$price' 
                        data-bs-toggle='modal' 
                        data-bs-target='#deleteModalConfirmation'>
                    <i class='fa-regular fa-trash-can fa-2x'></i>
                </button>
            </td>
        </tr>";
        }

    }
?>