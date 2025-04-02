# MOODLE_ENROL_PAYPAL

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

1. **Instale o plugin modificado**:
   - Baixe este repositório e compacte a pasta **paypal** em um arquivo `.zip`.
   - No Moodle, vá para **Administração do site > Plugins > Instalar plugins**.
   - Envie o arquivo `paypal.zip` e siga as instruções para instalação.

2. **Habilite o plugin**:
   - Acesse **Administração do site > Plugins > Visão geral dos Plugins**.
   - Localize o tópico **Métodos de inscrição** e clique na engrenagem.
   - Procure o método **PayPal** e clique no ícone de olho para habilitá-lo.

3. **Configure os códigos promocionais no curso**:
   - Na página do curso, coloque o mouse sobre a engrenagem e clique em **Mais**.
   - Navegue até a aba **Usuários**.
   - Em **Métodos de inscrição**.
   - Clique em **Adicionar método** selecione **PayPal** e siga as instruções.
   - Clique em **PayPal**.
   - Insira os promo codes na área **Código promocional** no seguinte formato:
     ```
     codigo15|15%
     codigo30|30%
     ```

4. **Utilização pelos usuários**:
   - Durante o processo de inscrição, os usuários poderão inserir o código promocional no formulário para obter o desconto correspondente.

## Observação

- Caso ocorram erros na tradução dos campos, recomenda-se atualizar o pacote de idiomas **pt_br**.
- Este projeto é uma edição de um plugin já existente no Moodle. Para mais informações sobre o plugin original, consulte a [documentação oficial do Moodle](https://moodle.org/).