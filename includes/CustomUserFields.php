<?php
namespace CustomUserFields\includes;

class CustomUserFields
{
   
    /**
     * Constructor.
     */
    public function __construct() {
      add_filter( 'user_contactmethods', array( $this, 'userContactMethodsRender' ) );
  }

  /**
   * User Contact information
   *
   * @param array $methods
   *
   * @return array
   */
  public function userContactMethodsRender( $methods ) : array {

      //Add contact methods
      $methods['cpf'] = __( 'CPF' );
      $methods['estado_civil']  = __( 'Estado Civil' );
      $methods['endereco_1'] = __( 'Endereço 1' );
      $methods['endereco_2'] = __( 'Endereço 2' );
      $methods['telefone'] = __('Telefone');

      return $methods;
  }

}
