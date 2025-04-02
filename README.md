# Moodle PayPal Enrolment Plugin with Promo Code Feature

Este projeto é uma modificação do plugin nativo de inscrição via PayPal do Moodle. Foi implementada a funcionalidade de **promo code/cupom de desconto**, permitindo que os usuários apliquem códigos promocionais para obter descontos durante o processo de inscrição em cursos.

## Sobre o Projeto Original

O código base deste projeto é o plugin de inscrição via PayPal do Moodle, que permite configurar cursos pagos. Esta modificação adiciona suporte para promo codes, mantendo todas as funcionalidades originais do plugin.

## Funcionalidades Adicionadas

- Suporte para aplicação de códigos promocionais durante a inscrição.
- Cálculo automático de descontos com base no código promocional fornecido.
- Integração com o fluxo de pagamento existente do PayPal.

## Autor da Modificação

Esta edição foi realizada por **Miguel Domiciano Vieira**.

## Licença

Este projeto segue a mesma licença do Moodle e do plugin original: [GNU GPL v3](http://www.gnu.org/copyleft/gpl.html).

## Como Usar

1. Configure o plugin de inscrição via PayPal no Moodle.
2. Adicione códigos promocionais na configuração do curso:
   - Na página do curso, coloque o mouse sobre a engrenagem e clique em **Mais**.
   - Mude para a aba **Usuários**.
   - Em **Métodos de inscrição**, clique em **PayPal**.
   - Insira os promo codes na área **Código promocional** no seguinte layout:
     ```
     codigo15|15%
     codigo30|30%
     ```

3. Os usuários poderão inserir o código promocional no formulário de inscrição para obter descontos.

## Observação

Este projeto é uma edição de um plugin já existente no Moodle. Para mais informações sobre o plugin original, consulte a [documentação oficial do Moodle](https://moodle.org/).